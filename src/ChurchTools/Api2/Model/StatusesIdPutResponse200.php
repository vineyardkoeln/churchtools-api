<?php

namespace ChurchTools\Api2\Model;

class StatusesIdPutResponse200
{
    /**
     *
     *
     * @var Status
     */
    protected $data;
    /**
     *
     *
     * @return Status
     */
    public function getData() : Status
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Status $data
     *
     * @return self
     */
    public function setData(Status $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
