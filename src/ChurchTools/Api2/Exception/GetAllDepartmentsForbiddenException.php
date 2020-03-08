<?php

namespace ChurchTools\Api2\Exception;

class GetAllDepartmentsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see departments', 403);
    }
}
