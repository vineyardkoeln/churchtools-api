<?php

namespace ChurchTools\Api2\Model;

class StatusesPostBody
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shorty;
    /**
     * 
     *
     * @var bool
     */
    protected $isMember;
    /**
     * 
     *
     * @var bool
     */
    protected $isSearchable = true;
    /**
     * 
     *
     * @var int
     */
    protected $sortKey = 10;
    /**
     * 
     *
     * @var int
     */
    protected $securityLevelId = 1;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * 
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
     * 
     *
     * @return bool
     */
    public function getIsMember() : bool
    {
        return $this->isMember;
    }
    /**
     * 
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
     * 
     *
     * @return bool
     */
    public function getIsSearchable() : bool
    {
        return $this->isSearchable;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getSecurityLevelId() : int
    {
        return $this->securityLevelId;
    }
    /**
     * 
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