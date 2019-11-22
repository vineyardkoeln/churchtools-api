<?php

namespace ChurchTools\Api2\Exception;

class GetMasterdataPersonRoleByRoleIdNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Role not found', 404);
    }
}