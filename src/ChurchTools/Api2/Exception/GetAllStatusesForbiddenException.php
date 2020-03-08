<?php

namespace ChurchTools\Api2\Exception;

class GetAllStatusesForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden to see statuses', 403);
    }
}
