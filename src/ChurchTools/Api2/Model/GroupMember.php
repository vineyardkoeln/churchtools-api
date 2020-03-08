<?php

namespace ChurchTools\Api2\Model;

class GroupMember
{
    /**
     *
     *
     * @var int
     */
    protected $personId;
    /**
     *
     *
     * @var int
     */
    protected $roleId;
    /**
     *
     *
     * @var string
     */
    protected $comment;
    /**
     *
     *
     * @var string
     */
    protected $memberStartDate;
    /**
     *
     *
     * @var string|null
     */
    protected $memberEndDate;
    /**
     *
     *
     * @return int
     */
    public function getPersonId() : int
    {
        return $this->personId;
    }
    /**
     *
     *
     * @param int $personId
     *
     * @return self
     */
    public function setPersonId(int $personId) : self
    {
        $this->personId = $personId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }
    /**
     *
     *
     * @param int $roleId
     *
     * @return self
     */
    public function setRoleId(int $roleId) : self
    {
        $this->roleId = $roleId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     *
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getMemberStartDate() : string
    {
        return $this->memberStartDate;
    }
    /**
     *
     *
     * @param string $memberStartDate
     *
     * @return self
     */
    public function setMemberStartDate(string $memberStartDate) : self
    {
        $this->memberStartDate = $memberStartDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMemberEndDate() : ?string
    {
        return $this->memberEndDate;
    }
    /**
     *
     *
     * @param string|null $memberEndDate
     *
     * @return self
     */
    public function setMemberEndDate(?string $memberEndDate) : self
    {
        $this->memberEndDate = $memberEndDate;
        return $this;
    }
}
