<?php

namespace ChurchTools\Api2\Model;

class StatusesPostResponse201
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
     * @var StatusesPostResponse201Meta
     */
    protected $meta;
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
    /**
     *
     *
     * @return StatusesPostResponse201Meta
     */
    public function getMeta() : StatusesPostResponse201Meta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param StatusesPostResponse201Meta $meta
     *
     * @return self
     */
    public function setMeta(StatusesPostResponse201Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
