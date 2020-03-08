<?php

namespace ChurchTools\Api2\Model;

class CampusesIdPutResponse200
{
    /**
     *
     *
     * @var Campus
     */
    protected $data;
    /**
     *
     *
     * @return Campus
     */
    public function getData() : Campus
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Campus $data
     *
     * @return self
     */
    public function setData(Campus $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
