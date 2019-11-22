<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostResponse200
{
    /**
     * 
     *
     * @var PersonsPropertiesPostResponse200Data
     */
    protected $data;
    /**
     * 
     *
     * @return PersonsPropertiesPostResponse200Data
     */
    public function getData() : PersonsPropertiesPostResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PersonsPropertiesPostResponse200Data $data
     *
     * @return self
     */
    public function setData(PersonsPropertiesPostResponse200Data $data) : self
    {
        $this->data = $data;
        return $this;
    }
}