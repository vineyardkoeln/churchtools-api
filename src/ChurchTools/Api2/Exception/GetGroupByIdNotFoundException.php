<?php

namespace ChurchTools\Api2\Exception;

class GetGroupByIdNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Group not found', 404);
    }
}
