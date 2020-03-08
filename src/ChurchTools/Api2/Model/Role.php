<?php

namespace ChurchTools\Api2\Model;

class Role
{
    /**
     * ID of this group type role.
     *
     * @var int
     */
    protected $id;
    /**
     * ID of corresponding group type.
     *
     * @var int
     */
    protected $groupTypeId;
    /**
     * Name of role.
     *
     * @var string
     */
    protected $name;
    /**
     * Abbreviation of the name.
     *
     * @var string
     */
    protected $shorty;
    /**
     * Number used for sorting roles.
     *
     * @var int
     */
    protected $sortKey;
    /**
     * Flag, if members of this role can be deleted or removed from the group.
     *
     * @var bool
     */
    protected $toDelete;
    /**
     * Flag, if group member is requesting group access.
     *
     * @var bool
     */
    protected $hasRequested;
    /**
     * Flag, this role is a leader.
     *
     * @var bool
     */
    protected $isLeader;
    /**
     * Indicator of default roles.
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * Flag, if this role is hidden in groups.
     *
     * @var bool
     */
    protected $isHidden;
    /**
     * ID of the grow path.
     *
     * @var int|null
     */
    protected $growPathId;
    /**
     * ID of this group type role.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of this group type role.
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
     * ID of corresponding group type.
     *
     * @return int
     */
    public function getGroupTypeId() : int
    {
        return $this->groupTypeId;
    }
    /**
     * ID of corresponding group type.
     *
     * @param int $groupTypeId
     *
     * @return self
     */
    public function setGroupTypeId(int $groupTypeId) : self
    {
        $this->groupTypeId = $groupTypeId;
        return $this;
    }
    /**
     * Name of role.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of role.
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
     * Abbreviation of the name.
     *
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * Abbreviation of the name.
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
     * Number used for sorting roles.
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * Number used for sorting roles.
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
     * Flag, if members of this role can be deleted or removed from the group.
     *
     * @return bool
     */
    public function getToDelete() : bool
    {
        return $this->toDelete;
    }
    /**
     * Flag, if members of this role can be deleted or removed from the group.
     *
     * @param bool $toDelete
     *
     * @return self
     */
    public function setToDelete(bool $toDelete) : self
    {
        $this->toDelete = $toDelete;
        return $this;
    }
    /**
     * Flag, if group member is requesting group access.
     *
     * @return bool
     */
    public function getHasRequested() : bool
    {
        return $this->hasRequested;
    }
    /**
     * Flag, if group member is requesting group access.
     *
     * @param bool $hasRequested
     *
     * @return self
     */
    public function setHasRequested(bool $hasRequested) : self
    {
        $this->hasRequested = $hasRequested;
        return $this;
    }
    /**
     * Flag, this role is a leader.
     *
     * @return bool
     */
    public function getIsLeader() : bool
    {
        return $this->isLeader;
    }
    /**
     * Flag, this role is a leader.
     *
     * @param bool $isLeader
     *
     * @return self
     */
    public function setIsLeader(bool $isLeader) : self
    {
        $this->isLeader = $isLeader;
        return $this;
    }
    /**
     * Indicator of default roles.
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * Indicator of default roles.
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * Flag, if this role is hidden in groups.
     *
     * @return bool
     */
    public function getIsHidden() : bool
    {
        return $this->isHidden;
    }
    /**
     * Flag, if this role is hidden in groups.
     *
     * @param bool $isHidden
     *
     * @return self
     */
    public function setIsHidden(bool $isHidden) : self
    {
        $this->isHidden = $isHidden;
        return $this;
    }
    /**
     * ID of the grow path.
     *
     * @return int|null
     */
    public function getGrowPathId() : ?int
    {
        return $this->growPathId;
    }
    /**
     * ID of the grow path.
     *
     * @param int|null $growPathId
     *
     * @return self
     */
    public function setGrowPathId(?int $growPathId) : self
    {
        $this->growPathId = $growPathId;
        return $this;
    }
}
