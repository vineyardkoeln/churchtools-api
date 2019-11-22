<?php

namespace ChurchTools\Api2\Exception;

class PatchPersonBadRequestException extends \RuntimeException implements ClientException
{
    private $personsIdPatchResponse400;
    public function __construct(\ChurchTools\Api2\Model\PersonsIdPatchResponse400 $personsIdPatchResponse400)
    {
        parent::__construct('Bad Request', 400);
        $this->personsIdPatchResponse400 = $personsIdPatchResponse400;
    }
    public function getPersonsIdPatchResponse400()
    {
        return $this->personsIdPatchResponse400;
    }
}