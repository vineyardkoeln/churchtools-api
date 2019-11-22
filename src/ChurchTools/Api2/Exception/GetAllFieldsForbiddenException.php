<?php

namespace ChurchTools\Api2\Exception;

class GetAllFieldsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see fields', 403);
    }
}