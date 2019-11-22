<?php

namespace ChurchTools\Api2\Model;

class Status
{
    /**
     * ID of status
     *
     * @var int
     */
    protected $id;
    /**
     * Status name
     *
     * @var string
     */
    protected $name;
    /**
     * Abbreviation of name.
     *
     * @var string
     */
    protected $shorty;
    /**
     * Flag if status is member of the church
     *
     * @var bool
     */
    protected $isMember;
    /**
     * Flag if that status is searchable
     *
     * @var bool
     */
    protected $isSearchable;
    /**
     * Used to sort all statuses
     *
     * @var int
     */
    protected $sortKey;
    /**
     * Only persons with that securitylevel can edit/select/delete that status
     *
     * @var int
     */
    protected $securityLevelId;
    /**
     * ID of status
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of status
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Status name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Status name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Abbreviation of name.
     *
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * Abbreviation of name.
     *
     * @param string $shorty
     *
     * @return self
     */
    public function setShorty(string $shorty) : self
    {
        $this->shorty = $shorty;
        return $this;
    }
    /**
     * Flag if status is member of the church
     *
     * @return bool
     */
    public function getIsMember() : bool
    {
        return $this->isMember;
    }
    /**
     * Flag if status is member of the church
     *
     * @param bool $isMember
     *
     * @return self
     */
    public function setIsMember(bool $isMember) : self
    {
        $this->isMember = $isMember;
        return $this;
    }
    /**
     * Flag if that status is searchable
     *
     * @return bool
     */
    public function getIsSearchable() : bool
    {
        return $this->isSearchable;
    }
    /**
     * Flag if that status is searchable
     *
     * @param bool $isSearchable
     *
     * @return self
     */
    public function setIsSearchable(bool $isSearchable) : self
    {
        $this->isSearchable = $isSearchable;
        return $this;
    }
    /**
     * Used to sort all statuses
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * Used to sort all statuses
     *
     * @param int $sortKey
     *
     * @return self
     */
    public function setSortKey(int $sortKey) : self
    {
        $this->sortKey = $sortKey;
        return $this;
    }
    /**
     * Only persons with that securitylevel can edit/select/delete that status
     *
     * @return int
     */
    public function getSecurityLevelId() : int
    {
        return $this->securityLevelId;
    }
    /**
     * Only persons with that securitylevel can edit/select/delete that status
     *
     * @param int $securityLevelId
     *
     * @return self
     */
    public function setSecurityLevelId(int $securityLevelId) : self
    {
        $this->securityLevelId = $securityLevelId;
        return $this;
    }
}