<?php

namespace ChurchTools\Api2\Model;

class ServicegroupsGetResponse200
{
    /**
     * 
     *
     * @var ServiceGroup[]
     */
    protected $data;
    /**
     * 
     *
     * @return ServiceGroup[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ServiceGroup[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}