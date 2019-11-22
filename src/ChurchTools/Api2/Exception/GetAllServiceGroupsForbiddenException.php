<?php

namespace ChurchTools\Api2\Exception;

class GetAllServiceGroupsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see service groups', 403);
    }
}