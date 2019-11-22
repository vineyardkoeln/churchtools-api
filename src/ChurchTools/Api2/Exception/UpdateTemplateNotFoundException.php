<?php

namespace ChurchTools\Api2\Exception;

class UpdateTemplateNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Resource not found', 404);
    }
}