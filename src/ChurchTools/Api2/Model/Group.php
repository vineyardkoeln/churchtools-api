<?php

namespace ChurchTools\Api2\Model;

class Group
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * You can see group fields up to this security level.
     *
     * @var int
     */
    protected $securityLevelForGroup;
    /**
     * 
     *
     * @var GroupInformation
     */
    protected $information;
    /**
     * 
     *
     * @var GroupSettings
     */
    protected $settings;
    /**
     * 
     *
     * @var GroupFollowUp
     */
    protected $followUp;
    /**
     * 
     *
     * @var GroupRolesItem[]
     */
    protected $roles;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
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
     * You can see group fields up to this security level.
     *
     * @return int
     */
    public function getSecurityLevelForGroup() : int
    {
        return $this->securityLevelForGroup;
    }
    /**
     * You can see group fields up to this security level.
     *
     * @param int $securityLevelForGroup
     *
     * @return self
     */
    public function setSecurityLevelForGroup(int $securityLevelForGroup) : self
    {
        $this->securityLevelForGroup = $securityLevelForGroup;
        return $this;
    }
    /**
     * 
     *
     * @return GroupInformation
     */
    public function getInformation() : GroupInformation
    {
        return $this->information;
    }
    /**
     * 
     *
     * @param GroupInformation $information
     *
     * @return self
     */
    public function setInformation(GroupInformation $information) : self
    {
        $this->information = $information;
        return $this;
    }
    /**
     * 
     *
     * @return GroupSettings
     */
    public function getSettings() : GroupSettings
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param GroupSettings $settings
     *
     * @return self
     */
    public function setSettings(GroupSettings $settings) : self
    {
        $this->settings = $settings;
        return $this;
    }
    /**
     * 
     *
     * @return GroupFollowUp
     */
    public function getFollowUp() : GroupFollowUp
    {
        return $this->followUp;
    }
    /**
     * 
     *
     * @param GroupFollowUp $followUp
     *
     * @return self
     */
    public function setFollowUp(GroupFollowUp $followUp) : self
    {
        $this->followUp = $followUp;
        return $this;
    }
    /**
     * 
     *
     * @return GroupRolesItem[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param GroupRolesItem[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
}