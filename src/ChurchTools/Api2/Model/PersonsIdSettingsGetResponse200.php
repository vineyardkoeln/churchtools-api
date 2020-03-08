<?php

namespace ChurchTools\Api2\Model;

class PersonsIdSettingsGetResponse200
{
    /**
     *
     *
     * @var PersonSetting[]
     */
    protected $data;
    /**
     *
     *
     * @return PersonSetting[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param PersonSetting[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
