<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItemServiceGroupNotesItem
{
    /**
     *
     *
     * @var int
     */
    protected $serviceGroupId;
    /**
     *
     *
     * @var string
     */
    protected $note;
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
     * @return string
     */
    public function getNote() : string
    {
        return $this->note;
    }
    /**
     *
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note) : self
    {
        $this->note = $note;
        return $this;
    }
}
