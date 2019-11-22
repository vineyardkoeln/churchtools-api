<?php

namespace ChurchTools\Api2\Model;

class GroupSettingsGroupMeeting
{
    /**
     * Create weekly group meetings.
     *
     * @var bool
     */
    protected $autoCreate;
    /**
     * Group template used for meetings.
     *
     * @var int|null
     */
    protected $templateId;
    /**
     * Create weekly group meetings.
     *
     * @return bool
     */
    public function getAutoCreate() : bool
    {
        return $this->autoCreate;
    }
    /**
     * Create weekly group meetings.
     *
     * @param bool $autoCreate
     *
     * @return self
     */
    public function setAutoCreate(bool $autoCreate) : self
    {
        $this->autoCreate = $autoCreate;
        return $this;
    }
    /**
     * Group template used for meetings.
     *
     * @return int|null
     */
    public function getTemplateId() : ?int
    {
        return $this->templateId;
    }
    /**
     * Group template used for meetings.
     *
     * @param int|null $templateId
     *
     * @return self
     */
    public function setTemplateId(?int $templateId) : self
    {
        $this->templateId = $templateId;
        return $this;
    }
}