<?php

namespace ChurchTools\Api2\Exception;

class GetPersonByIdForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see, create, update, or delete resource', 403);
    }
}