<?php

namespace ChurchTools\Api2\Model;

class GroupsIdMembersGetResponse200Meta
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
     * @var object
     */
    protected $pagination;
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
    /**
     * 
     *
     * @return object
     */
    public function getPagination()
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param object $pagination
     *
     * @return self
     */
    public function setPagination($pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
}