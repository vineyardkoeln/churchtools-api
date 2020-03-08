<?php

namespace ChurchTools\Api2\Exception;

class GetMasterdataPersonRoleByRoleIdForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see group type role', 403);
    }
}
