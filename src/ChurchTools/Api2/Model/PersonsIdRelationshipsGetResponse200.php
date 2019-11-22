<?php

namespace ChurchTools\Api2\Model;

class PersonsIdRelationshipsGetResponse200
{
    /**
     * 
     *
     * @var PersonsIdRelationshipsGetResponse200DataItem[]
     */
    protected $data;
    /**
     * 
     *
     * @return PersonsIdRelationshipsGetResponse200DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PersonsIdRelationshipsGetResponse200DataItem[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}