<?php

namespace ChurchTools\Api2\Exception;

class GetCampusByIdNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Campus not found', 404);
    }
}