<?php

namespace ChurchTools\Api2\Model;

class GroupsIdMembersGetResponse200
{
    /**
     *
     *
     * @var GroupMember[]
     */
    protected $data;
    /**
     *
     *
     * @var GroupsIdMembersGetResponse200Meta
     */
    protected $meta;
    /**
     *
     *
     * @return GroupMember[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param GroupMember[] $data
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
     * @return GroupsIdMembersGetResponse200Meta
     */
    public function getMeta() : GroupsIdMembersGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param GroupsIdMembersGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(GroupsIdMembersGetResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
