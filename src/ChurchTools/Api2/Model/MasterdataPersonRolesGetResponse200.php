<?php

namespace ChurchTools\Api2\Model;

class MasterdataPersonRolesGetResponse200
{
    /**
     *
     *
     * @var Role[]
     */
    protected $data;
    /**
     *
     *
     * @var MasterdataPersonRolesGetResponse200Meta
     */
    protected $meta;
    /**
     *
     *
     * @return Role[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Role[] $data
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
     * @return MasterdataPersonRolesGetResponse200Meta
     */
    public function getMeta() : MasterdataPersonRolesGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param MasterdataPersonRolesGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(MasterdataPersonRolesGetResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
