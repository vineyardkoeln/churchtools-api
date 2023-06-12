<?php declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\MasterData;
use ChurchTools\Api\Exception\ChurchToolsApiException;
use ChurchTools\Api\Exception\JsonDecodingException;
use ChurchTools\Api\Exception\RestApiException;
use GuzzleHttp\Cookie\FileCookieJar;

/**
 * Class RestApi
 * @package ChurchTools\Api
 */
class RestApi
{
    const API_URL_TEMPLATE = 'https://%s/'; // Self hosted
    const API_URL_TEMPLATE_HOSTED = 'https://%s.church.tools/'; // Hosted by CT
    const LOGIN_ROUTE = 'login/ajax';
    const DATABASE_ROUTE = 'churchdb/ajax';
    const CALENDAR_ROUTE = 'churchcal/ajax';
    const SERVICE_ROUTE  = 'churchservice/ajax';
    const RESOURCE_ROUTE = 'churchresource/ajax';

    private $guzzleClient;  /** http client for server requests */
    private $churchHandle;  /** site name or full hostname for requests */
    private $csrfToken; /** CSRF token */

    /**
     * RestApi constructor. It's private, because you should be using one of the static constructor methods
     *
     * @param string $churchHandle
     */
    private function __construct(string $churchHandle, $cookie_jar = null)
    {
        if ($cookie_jar) {
            $cookies = [ 'cookies' => $cookie_jar ];
        } else {
            $cookies = true;
        }
        $this->guzzleClient = new \GuzzleHttp\Client($cookies);
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
    public static function createWithUsernamePassword(string $churchHandle, string $username, string $password, $cookie_jar = null, $retryOn401 = true): RestApi
    {
        $newInstance = new self($churchHandle, $cookie_jar);
        // Login is mandatory before each request except if a cookie has been set/provided
        if (!$cookie_jar || !$cookie_jar->getCookieByName('ChurchTools_churchtools')) {
            $resp = $newInstance->callApi(self::LOGIN_ROUTE, [
                'func' => 'login',
                'email' => $username,
                'password' => $password,
            ]);
        }
        try {
            $newInstance->getCsrfToken();
        } catch (\Exception $e) {
            if ($cookie_jar && $e->getCode() === 401) {
                $cookie_jar->clearSessionCookies();
                if ($retryOn401) {
                    return self::createWithUsernamePassword(
                        $churchHandle,
                        $username,
                        $password,
                        $cookie_jar,
                        false /* make sure, this happens only once. */
                    );
                }
            }
            throw $e;
        }
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
    public static function createWithLoginIdToken(string $churchHandle, string $loginToken, FileCookieJar $cookie_jar = null, $retryOn401 = true): RestApi
    {
        $newInstance = new self($churchHandle, $cookie_jar);
        // Login is mandatory before each request except if a cookie has been set/provided
        if (!$cookie_jar || !$cookie_jar->getCookieByName('ChurchTools_churchtools')) {
            $resp = $newInstance->callApi(self::LOGIN_ROUTE, [
                'func' => 'loginWithToken',
                'token' => $loginToken,
            ]);
        }

        try {
            $newInstance->getCsrfToken();
        } catch (\Exception $e) {
            $cookie = $cookie_jar->getCookieByName('ChurchTools_churchtools');
            if ($cookie_jar && $e->getCode() === 401) {
                $cookie->setDiscard(true);
                $cookie_jar->clearSessionCookies();
                if ($retryOn401) {
                    return self::createWithLoginIdToken(
                        $churchHandle,
                        $loginToken,
                        $cookie_jar,
                        false /* make sure, this happens only once. */
                    );
                }
            }
            throw $e;
        }
        return $newInstance;
    }

    /**
     * Get the CSRF token
     *
     * @return -
     * @see https://intern.church.tools/?q=churchwiki#/WikiView/filterWikicategory_id:0/doc:API-CSRF
     */
    private function getCsrfToken()
    {
        $response = $this->guzzleClient->get($this->getApiUrlCsrfToken($this->churchHandle));
        if ($response->getStatusCode() !== 200) {
            throw new RestApiException($response);
        }

        $rawData = (string)$response->getBody();
        $data = json_decode($rawData, true);
        if (!$data) {
            throw new JsonDecodingException($rawData);
        }
        $this->csrfToken = $data["data"];
    }

    /**
     * Get all person data
     *
     * @return array
     * @see https://api.church.tools/class-CTChurchDBModule.html#_getAllPersonData
     */
    public function getAllPersonData(): ?Persons
    {
        $retVal= null;
        $rawData= $this->callApi(self::DATABASE_ROUTE, [
            'func' => 'getAllPersonData',
        ]);
        $retVal= new Persons($rawData, true);
        return $retVal;
    }

    /**
     * Get all allowed calendars for the logged in user
     *
     * @param boolean $includePrivate Also return private calendars, or only global+group calendars, default false
     * @return Calendars All calendar ID the user is allowed to see
     *
     * @see https://api.church.tools/function-churchcal_getAllowedCategories.html
     */
    public function getAllowedCalendars(bool $includePrivate = false): ?Calendars
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
     * Get all calender entries from now until and with in ten days
     *
     * This api does not return them sorted, and repeating
     * events are sometimes returned even outside the specified range.
     *
     * @param array $categoryIds the calendar ids for which to get the entries
     * @param int $fromDays starting time frame in days from today
     * @param int $toDays end of time frame in days from today
     * @return array of CalendarEntry objects
     * @see https://api.church.tools/class-CTChurchCalModule.html#_getCalendarEvents
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
            $e= new CalendarEntry($eventData, false);
            array_push($retVal, $e);
        }
        return $retVal;
    }

    /**
     * Get all resource bookings
     *
     * @return array of Booking objects
     * @see https://api.church.tools/class-CTChurchResourceModule.html#_getBookings
     */
    public function getResourceBookings(): array
    {
        $retVal= [];
        $rawData= $this->callApi(self::RESOURCE_ROUTE, [
            'func' => 'getBookings',
        ]);
        
        foreach ($rawData['data'] as $bookingData) {
            $e= new Booking($bookingData, false);
            array_push($retVal, $e);
        }
        return $retVal;
    }
    
    /**
     * Get all event data including services
     *
     * @return array
     * @see https://api.church.tools/class-CTChurchServiceModule.html#_getAllEventData
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
     * Get all group meetings
     *
     * @return array of GroupMeeting objects
     * @see https://api.church.tools/class-CTChurchResourceModule.html#_getBookings
     */
    public function getGroupMeetings(int $groupId): array
    {
        $retVal= [];
        $rawData= $this->callApi(self::DATABASE_ROUTE, [
            'func' => 'GroupMeeting',
            'sub'  => 'getList',
            'g_id' => $groupId,
        ]);
        if ($rawData['data'] != null) {
            foreach ($rawData['data'] as $bookingData) {
                $e= new GroupMeeting($bookingData, false);
                array_push($retVal, $e);
            }
        }
        return $retVal;
    }
    
    /**
     * Get service master data
     *
     * @return array
     * @see https://api.church.tools/class-CTChurchServiceModule.html#_getMasterData
     */
    public function getServiceMasterData(): MasterData
    {
        return new MasterData($this->callApi(self::SERVICE_ROUTE, [
            'func' => 'getMasterData'
        ]));
    }

    /**
     * Get service master data
     *
     * @return array
     * @see https://api.church.tools/class-CTChurchResourceModule.html#_getMasterData
     */
    public function getResourceMasterData(): MasterData
    {
        return new MasterData($this->callApi(self::RESOURCE_ROUTE, [
            'func' => 'getMasterData'
        ]));
    }

    /**
     * Get person master data
     *
     * @return array
     * @see https://api.church.tools/class-CTChurchDBModule.html#_getMasterData
     */
    public function getPersonMasterData(): MasterData
    {
        return new MasterData($this->callApi(self::DATABASE_ROUTE, [
            'func' => 'getMasterData'
        ]));
    }

    /**
     * Get calendar master data
     *
     * @return array
     * @see https://api.church.tools/class-CTChurchCalModule.html#_getMasterData
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
     * @see https://api.church.tools/class-CTLoginModule.html#_getUserLoginToken
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
                'CSRF-Token' => $this->csrfToken,
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
            return sprintf(self::API_URL_TEMPLATE . '?q=%s', $this->churchHandle, $route);
        } else {
            return sprintf(self::API_URL_TEMPLATE_HOSTED . '?q=%s', $this->churchHandle, $route);
        }
    }

    /**
     * Build the API URL for the CSRF token
     * See also: https://intern.church.tools/?q=churchwiki#/WikiView/filterWikicategory_id:0/doc:API-CSRF
     *
     * @param string $route
     * @return string
     */
    private function getApiUrlCsrfToken(): string
    {
        if (strpos($this->churchHandle, '.')) {
            return sprintf(self::API_URL_TEMPLATE . 'api/csrftoken', $this->churchHandle);
        } else {
            return sprintf(self::API_URL_TEMPLATE_HOSTED . 'api/csrftoken', $this->churchHandle);
        }
    }
}
