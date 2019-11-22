<?php

namespace ChurchTools\Api2\Exception;

class SendAgendaEmailBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Validation errors. See response for details', 400);
    }
}