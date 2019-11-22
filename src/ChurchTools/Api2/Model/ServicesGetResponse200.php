<?php

namespace ChurchTools\Api2\Model;

class ServicesGetResponse200
{
    /**
     * 
     *
     * @var Service[]
     */
    protected $data;
    /**
     * 
     *
     * @return Service[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Service[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}