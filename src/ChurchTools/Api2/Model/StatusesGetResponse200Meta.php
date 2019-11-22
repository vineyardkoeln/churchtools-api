<?php

namespace ChurchTools\Api2\Model;

class StatusesGetResponse200Meta
{
    /**
     * 
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->count = $count;
        return $this;
    }
}