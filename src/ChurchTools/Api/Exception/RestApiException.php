<?php declare(strict_types=1);

namespace ChurchTools\Api\Exception;

use Psr\Http\Message\ResponseInterface;

/**
 * Class RestApiException
 * @package ChurchTools\Api\Exception
 */
class RestApiException extends \RuntimeException
{
    /**
     * RestApiException constructor.
     * @param ResponseInterface $response
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(ResponseInterface $response, $code = 0, \Throwable $previous = null)
    {
        $messageTemplate = 'Failed to call ChurchTools API: HTTP code %d - Response: %s';
        $message = sprintf($messageTemplate, $response->getStatusCode(), $response->getBody());
        parent::__construct($message, $code, $previous);
    }
}
