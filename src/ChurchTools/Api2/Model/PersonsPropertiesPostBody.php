<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostBody
{
    /**
     * 
     *
     * @var int[]
     */
    protected $ids;
    /**
     * 
     *
     * @return int[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param int[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->ids = $ids;
        return $this;
    }
}