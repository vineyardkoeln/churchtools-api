<?php

namespace ChurchTools\Api2\Exception;

class CreatePersonBadRequestException extends \RuntimeException implements ClientException
{
    private $personsPostResponse400;
    public function __construct(\ChurchTools\Api2\Model\PersonsPostResponse400 $personsPostResponse400)
    {
        parent::__construct('Bad Request / Duplicate Person', 400);
        $this->personsPostResponse400 = $personsPostResponse400;
    }
    public function getPersonsPostResponse400()
    {
        return $this->personsPostResponse400;
    }
}