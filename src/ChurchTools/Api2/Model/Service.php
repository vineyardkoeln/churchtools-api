<?php

namespace ChurchTools\Api2\Model;

class Service
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
     *
     *
     * @var int
     */
    protected $serviceGroupId;
    /**
     *
     *
     * @var bool
     */
    protected $commentOnConfirmation;
    /**
     *
     *
     * @var int
     */
    protected $sortKey;
    /**
     *
     *
     * @var bool
     */
    protected $allowDecline;
    /**
     *
     *
     * @var bool
     */
    protected $allowExchange;
    /**
     *
     *
     * @var string
     */
    protected $comment;
    /**
     *
     *
     * @var bool
     */
    protected $standard;
    /**
     *
     *
     * @var bool
     */
    protected $hidePersonName;
    /**
     *
     *
     * @var bool
     */
    protected $sendReminderMails;
    /**
     *
     *
     * @var bool
     */
    protected $sendServiceRequestEmails;
    /**
     *
     *
     * @var bool
     */
    protected $allowControlLiveAgenda;
    /**
     * Comma separated list of group ids
     *
     * @var string|null
     */
    protected $groupIds;
    /**
     * Comma separated list of tag ids
     *
     * @var string|null
     */
    protected $tagIds;
    /**
     *
     *
     * @var string
     */
    protected $calTextTemplate;
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
     *
     *
     * @return int
     */
    public function getServiceGroupId() : int
    {
        return $this->serviceGroupId;
    }
    /**
     *
     *
     * @param int $serviceGroupId
     *
     * @return self
     */
    public function setServiceGroupId(int $serviceGroupId) : self
    {
        $this->serviceGroupId = $serviceGroupId;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getCommentOnConfirmation() : bool
    {
        return $this->commentOnConfirmation;
    }
    /**
     *
     *
     * @param bool $commentOnConfirmation
     *
     * @return self
     */
    public function setCommentOnConfirmation(bool $commentOnConfirmation) : self
    {
        $this->commentOnConfirmation = $commentOnConfirmation;
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
     * @return bool
     */
    public function getAllowDecline() : bool
    {
        return $this->allowDecline;
    }
    /**
     *
     *
     * @param bool $allowDecline
     *
     * @return self
     */
    public function setAllowDecline(bool $allowDecline) : self
    {
        $this->allowDecline = $allowDecline;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getAllowExchange() : bool
    {
        return $this->allowExchange;
    }
    /**
     *
     *
     * @param bool $allowExchange
     *
     * @return self
     */
    public function setAllowExchange(bool $allowExchange) : self
    {
        $this->allowExchange = $allowExchange;
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
     * @return bool
     */
    public function getStandard() : bool
    {
        return $this->standard;
    }
    /**
     *
     *
     * @param bool $standard
     *
     * @return self
     */
    public function setStandard(bool $standard) : self
    {
        $this->standard = $standard;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getHidePersonName() : bool
    {
        return $this->hidePersonName;
    }
    /**
     *
     *
     * @param bool $hidePersonName
     *
     * @return self
     */
    public function setHidePersonName(bool $hidePersonName) : self
    {
        $this->hidePersonName = $hidePersonName;
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
    /**
     *
     *
     * @return bool
     */
    public function getSendServiceRequestEmails() : bool
    {
        return $this->sendServiceRequestEmails;
    }
    /**
     *
     *
     * @param bool $sendServiceRequestEmails
     *
     * @return self
     */
    public function setSendServiceRequestEmails(bool $sendServiceRequestEmails) : self
    {
        $this->sendServiceRequestEmails = $sendServiceRequestEmails;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getAllowControlLiveAgenda() : bool
    {
        return $this->allowControlLiveAgenda;
    }
    /**
     *
     *
     * @param bool $allowControlLiveAgenda
     *
     * @return self
     */
    public function setAllowControlLiveAgenda(bool $allowControlLiveAgenda) : self
    {
        $this->allowControlLiveAgenda = $allowControlLiveAgenda;
        return $this;
    }
    /**
     * Comma separated list of group ids
     *
     * @return string|null
     */
    public function getGroupIds() : ?string
    {
        return $this->groupIds;
    }
    /**
     * Comma separated list of group ids
     *
     * @param string|null $groupIds
     *
     * @return self
     */
    public function setGroupIds(?string $groupIds) : self
    {
        $this->groupIds = $groupIds;
        return $this;
    }
    /**
     * Comma separated list of tag ids
     *
     * @return string|null
     */
    public function getTagIds() : ?string
    {
        return $this->tagIds;
    }
    /**
     * Comma separated list of tag ids
     *
     * @param string|null $tagIds
     *
     * @return self
     */
    public function setTagIds(?string $tagIds) : self
    {
        $this->tagIds = $tagIds;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCalTextTemplate() : string
    {
        return $this->calTextTemplate;
    }
    /**
     *
     *
     * @param string $calTextTemplate
     *
     * @return self
     */
    public function setCalTextTemplate(string $calTextTemplate) : self
    {
        $this->calTextTemplate = $calTextTemplate;
        return $this;
    }
}
