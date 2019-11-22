<?php

namespace ChurchTools\Api2\Model;

class GroupRolesItem
{
    /**
     * ID of this group role.
     *
     * @var int
     */
    protected $id;
    /**
     * ID of the corresponding group type role.
     *
     * @var int
     */
    protected $groupTypeRoleId;
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
     * ID of the grow path. The id is either given from the group type role. But a group can override the grow path. In this case the group role specific ID is used.
     *
     * @var int|null
     */
    protected $growPathId;
    /**
     * Flag, if members with this role have to use two factor authentication.
     *
     * @var bool
     */
    protected $forceTwoFactorAuth;
    /**
     * Flag, if this role is active in this group.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * ID of this group role.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of this group role.
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
     * ID of the corresponding group type role.
     *
     * @return int
     */
    public function getGroupTypeRoleId() : int
    {
        return $this->groupTypeRoleId;
    }
    /**
     * ID of the corresponding group type role.
     *
     * @param int $groupTypeRoleId
     *
     * @return self
     */
    public function setGroupTypeRoleId(int $groupTypeRoleId) : self
    {
        $this->groupTypeRoleId = $groupTypeRoleId;
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
     * ID of the grow path. The id is either given from the group type role. But a group can override the grow path. In this case the group role specific ID is used.
     *
     * @return int|null
     */
    public function getGrowPathId() : ?int
    {
        return $this->growPathId;
    }
    /**
     * ID of the grow path. The id is either given from the group type role. But a group can override the grow path. In this case the group role specific ID is used.
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
    /**
     * Flag, if members with this role have to use two factor authentication.
     *
     * @return bool
     */
    public function getForceTwoFactorAuth() : bool
    {
        return $this->forceTwoFactorAuth;
    }
    /**
     * Flag, if members with this role have to use two factor authentication.
     *
     * @param bool $forceTwoFactorAuth
     *
     * @return self
     */
    public function setForceTwoFactorAuth(bool $forceTwoFactorAuth) : self
    {
        $this->forceTwoFactorAuth = $forceTwoFactorAuth;
        return $this;
    }
    /**
     * Flag, if this role is active in this group.
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Flag, if this role is active in this group.
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
}