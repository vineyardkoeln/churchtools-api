<?php

namespace ChurchTools\Api;

use ChurchTools\Api\Exception\ChurchToolsApiException;
use ChurchTools\Api\Exception\JsonDecodingException;
use ChurchTools\Api\Exception\RestApiException;

class RestApi
{
    const API_URL_TEMPLATE = 'https://%s.church.tools/?q=%s';
    const LOGIN_ROUTE = 'login/ajax';
    const DATABASE_ROUTE = 'churchdb/ajax';
    const CALENDAR_ROUTE = 'churchcal/ajax';
    const SERVICE_ROUTE = 'churchservice/ajax';

    private $guzzleClient;
    private $churchHandle;

    private function __construct(string $churchHandle)
    {
        $this->guzzleClient = new \GuzzleHttp\Client([
            'cookies' => true,
        ]);
        $this->churchHandle = $churchHandle;
    }

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

    public static function createWithLoginIdToken(string $churchHandle, string $loginId, string $loginToken): RestApi
    {
        $newInstance = new self($churchHandle);

        // Login is mandatory before each request
        $response = $newInstance->callApi(self::LOGIN_ROUTE, [
            'func' => 'loginWithToken',
            'id' => $loginId,
            'token' => $loginToken,
        ]);

        return $newInstance;
    }

    public function getAllPersonData(): array
    {
        return $this->callApi(self::DATABASE_ROUTE, [
            'func' => 'getAllPersonData',
        ]);
    }

    public function getCalendarEvents(array $categoryIds): array
    {
        return $this->callApi(self::CALENDAR_ROUTE, [
            'func' => 'getCalendarEvents',
            'category_ids' => $categoryIds,
            'from' => 0,
            'to' => '10'
        ]);
    }

    public function getAllEventData(): array
    {
        return $this->callApi(self::SERVICE_ROUTE, [
            'func' => 'getAllEventData',
        ]);
    }

    private function callApi(string $apiRoute, array $data = []): array
    {
        $response = $this->guzzleClient->post($this->getApiUrl($apiRoute), $this->getRequestOptions($data));
        if ($response->getStatusCode() !== 200) {
            throw new RestApiException($response);
        }

        $rawData = $response->getBody();
        $data = json_decode($rawData, true);
        if (!$data) {
            throw new JsonDecodingException($rawData);
        }
        if ($data['status'] === 'error') {
            throw new ChurchToolsApiException($data['message']);
        }

        return $data;
    }

    private function getRequestOptions(array $parameters = []): array
    {
        return [
            'body' => http_build_query($parameters),
            'headers' => [
                'Content-type' => 'application/x-www-form-urlencoded',
            ],
        ];
    }

    private function getApiUrl(string $route): string
    {
        return sprintf(self::API_URL_TEMPLATE, $this->churchHandle, $route);
    }
}
