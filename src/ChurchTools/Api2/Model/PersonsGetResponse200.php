<?php

namespace ChurchTools\Api2\Model;

class PersonsGetResponse200
{
    /**
     *
     *
     * @var Person[]
     */
    protected $data;
    /**
     *
     *
     * @var PersonsGetResponse200Meta
     */
    protected $meta;
    /**
     *
     *
     * @return Person[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Person[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     *
     *
     * @return PersonsGetResponse200Meta
     */
    public function getMeta() : PersonsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param PersonsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(PersonsGetResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
