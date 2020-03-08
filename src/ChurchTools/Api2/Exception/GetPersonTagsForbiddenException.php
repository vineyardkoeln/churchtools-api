<?php

namespace ChurchTools\Api2\Exception;

class GetPersonTagsForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden', 403);
    }
}
