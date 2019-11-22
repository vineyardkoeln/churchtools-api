<?php

namespace ChurchTools\Api2\Model;

class CampusesPostResponse201
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
     * @var CampusesPostResponse201Meta
     */
    protected $meta;
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
    /**
     * 
     *
     * @return CampusesPostResponse201Meta
     */
    public function getMeta() : CampusesPostResponse201Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param CampusesPostResponse201Meta $meta
     *
     * @return self
     */
    public function setMeta(CampusesPostResponse201Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}