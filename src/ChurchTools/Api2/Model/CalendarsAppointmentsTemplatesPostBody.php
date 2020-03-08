<?php

namespace ChurchTools\Api2\Model;

class CalendarsAppointmentsTemplatesPostBody
{
    /**
     *
     *
     * @var string
     */
    protected $title;
    /**
     *
     *
     * @var string
     */
    protected $comment;
    /**
     *
     *
     * @var string
     */
    protected $startTime;
    /**
     *
     *
     * @var int
     */
    protected $duration;
    /**
     *
     *
     * @var bool
     */
    protected $allDay;
    /**
     *
     *
     * @var string
     */
    protected $note;
    /**
     *
     *
     * @var bool
     */
    protected $isInternal;
    /**
     *
     *
     * @var int
     */
    protected $categoryId;
    /**
     *
     *
     * @var int
     */
    protected $repeatId;
    /**
     *
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
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
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     *
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime) : self
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     *
     *
     * @param int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getAllDay() : bool
    {
        return $this->allDay;
    }
    /**
     *
     *
     * @param bool $allDay
     *
     * @return self
     */
    public function setAllDay(bool $allDay) : self
    {
        $this->allDay = $allDay;
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
    /**
     *
     *
     * @return bool
     */
    public function getIsInternal() : bool
    {
        return $this->isInternal;
    }
    /**
     *
     *
     * @param bool $isInternal
     *
     * @return self
     */
    public function setIsInternal(bool $isInternal) : self
    {
        $this->isInternal = $isInternal;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
     *
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId) : self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getRepeatId() : int
    {
        return $this->repeatId;
    }
    /**
     *
     *
     * @param int $repeatId
     *
     * @return self
     */
    public function setRepeatId(int $repeatId) : self
    {
        $this->repeatId = $repeatId;
        return $this;
    }
}
