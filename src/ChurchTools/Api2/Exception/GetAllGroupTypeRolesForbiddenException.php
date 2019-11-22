<?php

namespace ChurchTools\Api2\Exception;

class GetAllGroupTypeRolesForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see group type roles', 403);
    }
}