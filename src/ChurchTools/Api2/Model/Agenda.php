<?php

namespace ChurchTools\Api2\Model;

class Agenda
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
     * @var string
     */
    protected $series;
    /**
     *
     *
     * @var bool
     */
    protected $isFinal;
    /**
     *
     *
     * @var int
     */
    protected $calendarId;
    /**
     * Total of agenda items (without headers)
     *
     * @var int
     */
    protected $total;
    /**
     *
     *
     * @var AgendaItemsItem[]
     */
    protected $items;
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
     * @return string
     */
    public function getSeries() : string
    {
        return $this->series;
    }
    /**
     *
     *
     * @param string $series
     *
     * @return self
     */
    public function setSeries(string $series) : self
    {
        $this->series = $series;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getIsFinal() : bool
    {
        return $this->isFinal;
    }
    /**
     *
     *
     * @param bool $isFinal
     *
     * @return self
     */
    public function setIsFinal(bool $isFinal) : self
    {
        $this->isFinal = $isFinal;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getCalendarId() : int
    {
        return $this->calendarId;
    }
    /**
     *
     *
     * @param int $calendarId
     *
     * @return self
     */
    public function setCalendarId(int $calendarId) : self
    {
        $this->calendarId = $calendarId;
        return $this;
    }
    /**
     * Total of agenda items (without headers)
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * Total of agenda items (without headers)
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     *
     *
     * @return AgendaItemsItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param AgendaItemsItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}
