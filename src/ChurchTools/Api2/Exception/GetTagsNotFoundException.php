<?php

namespace ChurchTools\Api2\Exception;

class GetTagsNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Resource not found', 404);
    }
}
