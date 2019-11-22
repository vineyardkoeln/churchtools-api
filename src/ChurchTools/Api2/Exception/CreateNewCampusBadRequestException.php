<?php

namespace ChurchTools\Api2\Exception;

class CreateNewCampusBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Validation error', 400);
    }
}