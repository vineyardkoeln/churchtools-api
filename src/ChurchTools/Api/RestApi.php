<?php declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\MasterData;
use ChurchTools\Api\Exception\ChurchToolsApiException;
use ChurchTools\Api\Exception\JsonDecodingException;
use ChurchTools\Api\Exception\RestApiException;

/**
 * Class RestApi
 * @package ChurchTools\Api
 */
class RestApi
{
    const API_URL_TEMPLATE = 'https://%s/?q=%s'; // Self hosted
    const API_URL_TEMPLATE_HOSTED = 'https://%s.church.tools/?q=%s'; // Hosted by CT
    const LOGIN_ROUTE = 'login/ajax';
    const DATABASE_ROUTE = 'churchdb/ajax';
    const CALENDAR_ROUTE = 'churchcal/ajax';
    const SERVICE_ROUTE = 'churchservice/ajax';

    private $guzzleClient;  /** http client for server requests */
    private $churchHandle;  /** site name or full hostname for requests */

    /**
     * RestApi constructor. It's private, because you should be using one of the static constructor methods
     *
     * @param string $churchHandle
     */
    private function __construct(string $churchHandle)
    {
        $this->guzzleClient = new \GuzzleHttp\Client([
            'cookies' => true,
        ]);
        $this->churchHandle = $churchHandle;
    }

    /**
     * Login with username and password
     *
     * @param string $churchHandle
     * @param string $username
     * @param string $password
     * @return RestApi
     */
    public static function createWithUsernamePassword(string $churchHandle, string $username, string $password): RestApi
    {
        $newInstance = new self($churchHandle);

        // Login is mandatory before each request
        $newInstance->callApi(self::LOGIN_ROUTE, [
            'func' => 'login',
            'email' => $username,
            'password' => $password,
        ]);

        return $newInstance;
    }

    /**
     * Login with login ID and token
     *
     * @param string $churchHandle
     * @param string $loginId
     * @param string $loginToken
     * @return RestApi
     */
    public static function createWithLoginIdToken(string $churchHandle, string $loginId, string $loginToken): RestApi
    {
        $newInstance = new self($churchHandle);

        // Login is mandatory before each request
        $newInstance->callApi(self::LOGIN_ROUTE, [
            'func' => 'loginWithToken',
            'id' => $loginId,
            'token' => $loginToken,
        ]);

        return $newInstance;
    }

    /**
     * Get all person data
     *
     * @return array
     * @see https://api.churchtools.de/class-CTChurchDBModule.html#_getAllPersonData
     */
    public function getAllPersonData(): array
    {
        return $this->callApi(self::DATABASE_ROUTE, [
            'func' => 'getAllPersonData',
        ]);
    }

    /**
     * Get all allowed calendars for the logged in user
     *
     * @param boolean $includePrivate Also return private calendars, or only global+group calendars, default false
     * @return Calendars All calendar ID the user is allowed to see
     *
     * @see https://api.churchtools.de/function-churchcal_getAllowedCategories.html
     */
    public function getAllowedCalendars(bool $includePrivate= false): ?Calendars
    {
        $retVal= null;
        $rawData= $this->callApi(self::CALENDAR_ROUTE, [
            'func' => 'churchcal_getAllowedCategories',
            'withPrivat' => $includePrivate,
            'onlyIds' => false
        ]);

        $retVal= new Calendars($rawData, false);
        return $retVal;
    }

    /**
     * Get all events from now until and with in ten days
     *
     * This api does not return them sorted, and repeating
     * events are sometimes returned even outside the specified range.
     *
     * You can use the ChurchTools\Api\Tools\CalendarTools to do filtering
     * and sorting on the result if required
     *
     * @param array $categoryIds the calendar ids for which to get the events
     * @param int $fromDays starting time frame in days from today
     * @param int $toDays end of time frame in days from today
     * @return array of Event objects
     * @see https://api.churchtools.de/class-CTChurchCalModule.html#_getCalendarEvents
     */
    public function getCalendarEvents(array $categoryIds, int $fromDays = 0, int $toDays = 10): array
    {
        $retVal= [];
        $rawData= $this->callApi(self::CALENDAR_ROUTE, [
            'func' => 'getCalendarEvents',
            'category_ids' => $categoryIds,
            'from' => $fromDays,
            'to' => $toDays,
        ]);
        
        foreach ($rawData['data'] as $eventData) {
            $e= new Calendarentry($eventData, false);
            array_push($retVal, $e);
        }
        return $retVal;
    }

    /**
     * Get all event data including services
     *
     * @return array
     * @see https://api.churchtools.de/class-CTChurchServiceModule.html#_getAllEventData
     */
    public function getAllEventData(): array
    {
        $retVal= [];
        $rawData= $this->callApi(self::SERVICE_ROUTE, [
            'func' => 'getAllEventData',
        ]);
        
        foreach ($rawData['data'] as $eventData) {
            $e= new Event($eventData, false);
            array_push($retVal, $e);
        }
        return $retVal;
    }

    /**
     * Get service master data
     *
     * @return array
     * @see https://api.churchtools.de/class-CTChurchServiceModule.html#_getMasterData
     */
    public function getServiceMasterData(): MasterData
    {
        return new MasterData($this->callApi(self::SERVICE_ROUTE, [
            'func' => 'getMasterData'
        ]));
    }

    /**
     * Get calendar master data
     *
     * @return array
     * @see https://api.churchtools.de/class-CTChurchCalModule.html#_getMasterData
     */
    public function getCalendarMasterData(): MasterData
    {
        return new MasterData($this->callApi(self::CALENDAR_ROUTE, [
            'func' => 'getMasterData'
        ]));
    }

    /**
     * Get login token for current user. This needs to be called only once, e.g. via a command, and can then
     * be stored in the project environment or configuration for re-use with `createWithLoginIdToken`.
     * It is very long-lasting (until revoked?).
     *
     * @param string $churchHandle
     * @param string $usernameOrEmail
     * @param string $password
     * @return array
     * @see https://api.churchtools.de/class-CTLoginModule.html#_getUserLoginToken
     */
    public static function getLoginToken(string $churchHandle, string $usernameOrEmail, string $password): array
    {
        return (new self($churchHandle))->callApi(self::LOGIN_ROUTE, [
            'func' => 'getUserLoginToken',
            'email' => $usernameOrEmail,
            'password' => $password,
        ]);
    }

    /**
     * Low level call to the ChurchTools API.
     *
     * @param string $apiRoute
     * @param array $data
     * @return array
     * @throws JsonDecodingException
     */
    private function callApi(string $apiRoute, array $data = []): array
    {
        $response = $this->guzzleClient->post($this->getApiUrl($apiRoute), $this->getRequestOptions($data));
        if ($response->getStatusCode() !== 200) {
            throw new RestApiException($response);
        }

        $rawData = (string)$response->getBody();
        $data = json_decode($rawData, true);
        if (!$data) {
            throw new JsonDecodingException($rawData);
        }
        if ($data['status'] === 'error') {
            throw new ChurchToolsApiException($data['message']);
        }

        return $data;
    }

    /**
     * Default request options for Guzzle call
     *
     * @param array $parameters
     * @return array
     */
    private function getRequestOptions(array $parameters = []): array
    {
        return [
            'body' => http_build_query($parameters),
            'headers' => [
                'Content-type' => 'application/x-www-form-urlencoded',
            ],
        ];
    }

    /**
     * Build the API URL for a certain service route
     *
     * @param string $route
     * @return string
     */
    private function getApiUrl(string $route): string
    {
        if (strpos($this->churchHandle, '.')) {
            return sprintf(self::API_URL_TEMPLATE, $this->churchHandle, $route);
        } else {
            return sprintf(self::API_URL_TEMPLATE_HOSTED, $this->churchHandle, $route);
        }
    }
}
