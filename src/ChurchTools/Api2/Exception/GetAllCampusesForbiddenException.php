<?php

namespace ChurchTools\Api2\Exception;

class GetAllCampusesForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see campuses', 403);
    }
}