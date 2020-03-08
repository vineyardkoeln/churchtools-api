<?php

namespace ChurchTools\Api2\Exception;

class GetAllServicesForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see services', 403);
    }
}
