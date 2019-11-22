<?php

namespace ChurchTools\Api2\Model;

class StatusesGetResponse200
{
    /**
     * 
     *
     * @var Status[]
     */
    protected $data;
    /**
     * 
     *
     * @var StatusesGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Status[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Status[] $data
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
     * @return StatusesGetResponse200Meta
     */
    public function getMeta() : StatusesGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param StatusesGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(StatusesGetResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}