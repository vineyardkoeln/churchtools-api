<?php

namespace ChurchTools\Api\Exception;

use Throwable;

/**
 * Class JsonDecodingException
 * @package ChurchTools\Api\Exception
 */
class JsonDecodingException extends \RuntimeException
{
    /**
     * JsonDecodingException constructor.
     * @param string $rawResponse
     * @param Throwable|null $previous
     */
    public function __construct(string $rawResponse = '', Throwable $previous = null)
    {
        parent::__construct('Invalid JSON, could not decode correctly. Response was: ' . $rawResponse, 0, $previous);
    }
}
