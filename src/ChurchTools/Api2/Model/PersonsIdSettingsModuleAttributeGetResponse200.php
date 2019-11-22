<?php

namespace ChurchTools\Api2\Model;

class PersonsIdSettingsModuleAttributeGetResponse200
{
    /**
     * Piece of meta information about a person, like is this person using two factor authentication or does she want service remind mails.
     *
     * @var PersonSetting
     */
    protected $data;
    /**
     * Piece of meta information about a person, like is this person using two factor authentication or does she want service remind mails.
     *
     * @return PersonSetting
     */
    public function getData() : PersonSetting
    {
        return $this->data;
    }
    /**
     * Piece of meta information about a person, like is this person using two factor authentication or does she want service remind mails.
     *
     * @param PersonSetting $data
     *
     * @return self
     */
    public function setData(PersonSetting $data) : self
    {
        $this->data = $data;
        return $this;
    }
}