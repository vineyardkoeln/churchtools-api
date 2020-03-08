<?php

namespace ChurchTools\Api2\Exception;

class GetAllGroupsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see groups', 403);
    }
}
