<?php

namespace ChurchTools\Api2\Model;

class GroupSettingsNewMember
{
    /**
     *
     *
     * @var int|null
     */
    protected $campusId;
    /**
     *
     *
     * @var int|null
     */
    protected $statusId;
    /**
     *
     *
     * @var int|null
     */
    protected $departmentId;
    /**
     *
     *
     * @return int|null
     */
    public function getCampusId() : ?int
    {
        return $this->campusId;
    }
    /**
     *
     *
     * @param int|null $campusId
     *
     * @return self
     */
    public function setCampusId(?int $campusId) : self
    {
        $this->campusId = $campusId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     *
     *
     * @param int|null $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getDepartmentId() : ?int
    {
        return $this->departmentId;
    }
    /**
     *
     *
     * @param int|null $departmentId
     *
     * @return self
     */
    public function setDepartmentId(?int $departmentId) : self
    {
        $this->departmentId = $departmentId;
        return $this;
    }
}
