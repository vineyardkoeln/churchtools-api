<?php

namespace ChurchTools\Api2\Exception;

class GetAllGroupMembersForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see group members', 403);
    }
}