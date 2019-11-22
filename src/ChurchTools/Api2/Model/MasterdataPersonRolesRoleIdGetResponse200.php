<?php

namespace ChurchTools\Api2\Model;

class MasterdataPersonRolesRoleIdGetResponse200
{
    /**
     * 
     *
     * @var Role
     */
    protected $data;
    /**
     * 
     *
     * @return Role
     */
    public function getData() : Role
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Role $data
     *
     * @return self
     */
    public function setData(Role $data) : self
    {
        $this->data = $data;
        return $this;
    }
}