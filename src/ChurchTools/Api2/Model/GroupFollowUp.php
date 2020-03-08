<?php

namespace ChurchTools\Api2\Model;

class GroupFollowUp
{
    /**
     *
     *
     * @var int
     */
    protected $typeId;
    /**
     *
     *
     * @var int
     */
    protected $targetTypeId;
    /**
     *
     *
     * @var int|null
     */
    protected $targetObjectId;
    /**
     *
     *
     * @var int|null
     */
    protected $targetGroupMemberStatusId;
    /**
     *
     *
     * @var bool
     */
    protected $sendReminderMails;
    /**
     *
     *
     * @return int
     */
    public function getTypeId() : int
    {
        return $this->typeId;
    }
    /**
     *
     *
     * @param int $typeId
     *
     * @return self
     */
    public function setTypeId(int $typeId) : self
    {
        $this->typeId = $typeId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getTargetTypeId() : int
    {
        return $this->targetTypeId;
    }
    /**
     *
     *
     * @param int $targetTypeId
     *
     * @return self
     */
    public function setTargetTypeId(int $targetTypeId) : self
    {
        $this->targetTypeId = $targetTypeId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getTargetObjectId() : ?int
    {
        return $this->targetObjectId;
    }
    /**
     *
     *
     * @param int|null $targetObjectId
     *
     * @return self
     */
    public function setTargetObjectId(?int $targetObjectId) : self
    {
        $this->targetObjectId = $targetObjectId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getTargetGroupMemberStatusId() : ?int
    {
        return $this->targetGroupMemberStatusId;
    }
    /**
     *
     *
     * @param int|null $targetGroupMemberStatusId
     *
     * @return self
     */
    public function setTargetGroupMemberStatusId(?int $targetGroupMemberStatusId) : self
    {
        $this->targetGroupMemberStatusId = $targetGroupMemberStatusId;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getSendReminderMails() : bool
    {
        return $this->sendReminderMails;
    }
    /**
     *
     *
     * @param bool $sendReminderMails
     *
     * @return self
     */
    public function setSendReminderMails(bool $sendReminderMails) : self
    {
        $this->sendReminderMails = $sendReminderMails;
        return $this;
    }
}
