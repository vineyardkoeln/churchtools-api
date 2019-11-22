<?php

namespace ChurchTools\Api2\Exception;

class CreateNewCampusPaymentRequiredException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('License limit reached. Update your license to perform this action.', 402);
    }
}