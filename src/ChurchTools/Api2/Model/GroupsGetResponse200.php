<?php

namespace ChurchTools\Api2\Model;

class GroupsGetResponse200
{
    /**
     *
     *
     * @var Group[]
     */
    protected $data;
    /**
     *
     *
     * @var GroupsGetResponse200Meta
     */
    protected $meta;
    /**
     *
     *
     * @return Group[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Group[] $data
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
     * @return GroupsGetResponse200Meta
     */
    public function getMeta() : GroupsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param GroupsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(GroupsGetResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
