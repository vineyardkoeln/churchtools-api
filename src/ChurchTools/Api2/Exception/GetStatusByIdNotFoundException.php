<?php

namespace ChurchTools\Api2\Exception;

class GetStatusByIdNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Status not found', 404);
    }
}
