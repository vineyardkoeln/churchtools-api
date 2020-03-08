<?php

namespace ChurchTools\Api2\Model;

class GroupSettings
{
    /**
     *
     *
     * @var bool
     */
    protected $isHidden;
    /**
     * Indicator if people can apply for participation.
     *
     * @var bool
     */
    protected $isOpenForMembers;
    /**
     * Indicator if applications are accepted automatically.
     *
     * @var bool
     */
    protected $autoAccept;
    /**
     *
     *
     * @var bool
     */
    protected $isPublic;
    /**
     * Show in statistics.
     *
     * @var bool
     */
    protected $inStatistic;
    /**
     *
     *
     * @var GroupSettingsGroupMeeting
     */
    protected $groupMeeting;
    /**
     * Inform leader via e-mail about changes.
     *
     * @var bool
     */
    protected $informLeader;
    /**
     * Campus, Status, Department for newly created persons.
     *
     * @var GroupSettingsNewMember|null
     */
    protected $newMember;
    /**
     *
     *
     * @return bool
     */
    public function getIsHidden() : bool
    {
        return $this->isHidden;
    }
    /**
     *
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
     * Indicator if people can apply for participation.
     *
     * @return bool
     */
    public function getIsOpenForMembers() : bool
    {
        return $this->isOpenForMembers;
    }
    /**
     * Indicator if people can apply for participation.
     *
     * @param bool $isOpenForMembers
     *
     * @return self
     */
    public function setIsOpenForMembers(bool $isOpenForMembers) : self
    {
        $this->isOpenForMembers = $isOpenForMembers;
        return $this;
    }
    /**
     * Indicator if applications are accepted automatically.
     *
     * @return bool
     */
    public function getAutoAccept() : bool
    {
        return $this->autoAccept;
    }
    /**
     * Indicator if applications are accepted automatically.
     *
     * @param bool $autoAccept
     *
     * @return self
     */
    public function setAutoAccept(bool $autoAccept) : self
    {
        $this->autoAccept = $autoAccept;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsPublic() : bool
    {
        return $this->isPublic;
    }
    /**
     *
     *
     * @param bool $isPublic
     *
     * @return self
     */
    public function setIsPublic(bool $isPublic) : self
    {
        $this->isPublic = $isPublic;
        return $this;
    }
    /**
     * Show in statistics.
     *
     * @return bool
     */
    public function getInStatistic() : bool
    {
        return $this->inStatistic;
    }
    /**
     * Show in statistics.
     *
     * @param bool $inStatistic
     *
     * @return self
     */
    public function setInStatistic(bool $inStatistic) : self
    {
        $this->inStatistic = $inStatistic;
        return $this;
    }
    /**
     *
     *
     * @return GroupSettingsGroupMeeting
     */
    public function getGroupMeeting() : GroupSettingsGroupMeeting
    {
        return $this->groupMeeting;
    }
    /**
     *
     *
     * @param GroupSettingsGroupMeeting $groupMeeting
     *
     * @return self
     */
    public function setGroupMeeting(GroupSettingsGroupMeeting $groupMeeting) : self
    {
        $this->groupMeeting = $groupMeeting;
        return $this;
    }
    /**
     * Inform leader via e-mail about changes.
     *
     * @return bool
     */
    public function getInformLeader() : bool
    {
        return $this->informLeader;
    }
    /**
     * Inform leader via e-mail about changes.
     *
     * @param bool $informLeader
     *
     * @return self
     */
    public function setInformLeader(bool $informLeader) : self
    {
        $this->informLeader = $informLeader;
        return $this;
    }
    /**
     * Campus, Status, Department for newly created persons.
     *
     * @return GroupSettingsNewMember|null
     */
    public function getNewMember() : ?GroupSettingsNewMember
    {
        return $this->newMember;
    }
    /**
     * Campus, Status, Department for newly created persons.
     *
     * @param GroupSettingsNewMember|null $newMember
     *
     * @return self
     */
    public function setNewMember(?GroupSettingsNewMember $newMember) : self
    {
        $this->newMember = $newMember;
        return $this;
    }
}
