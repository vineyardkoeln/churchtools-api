<?php

namespace ChurchTools\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class RestApiException extends \RuntimeException
{
    public function __construct(ResponseInterface $response, $code = 0, \Throwable $previous = null)
    {
        $messageTemplate = 'Failed to call ChurchTools API: HTTP code %d - Response: %s';
        $message = sprintf($messageTemplate, $response->getStatusCode(), $response->getBody());
        parent::__construct($message, $code, $previous);
    }
}
