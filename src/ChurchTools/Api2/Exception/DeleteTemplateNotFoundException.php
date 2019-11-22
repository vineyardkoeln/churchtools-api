<?php

namespace ChurchTools\Api2\Exception;

class DeleteTemplateNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Resource not found', 404);
    }
}