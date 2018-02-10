<?php

namespace ChurchTools\Api\Exception;

use Throwable;

class JsonDecodingException extends \RuntimeException
{
    public function __construct(string $rawResponse = '', Throwable $previous = null)
    {
        parent::__construct('Invalid JSON, could not decode correctly:' . $rawResponse, 0, $previous);
    }
}
