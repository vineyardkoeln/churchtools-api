<?php

namespace ChurchTools\Api2\Model;

class PersonsIdTagsGetResponse200
{
    /**
     * 
     *
     * @var Tag[]
     */
    protected $data;
    /**
     * 
     *
     * @return Tag[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Tag[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}