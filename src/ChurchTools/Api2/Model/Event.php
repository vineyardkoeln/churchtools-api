<?php

namespace ChurchTools\Api2\Model;

class Event
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
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $startDate;
    /**
     * 
     *
     * @var string
     */
    protected $endDate;
    /**
     * 
     *
     * @var EventEventServicesItem[]
     */
    protected $eventServices;
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
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return EventEventServicesItem[]
     */
    public function getEventServices() : array
    {
        return $this->eventServices;
    }
    /**
     * 
     *
     * @param EventEventServicesItem[] $eventServices
     *
     * @return self
     */
    public function setEventServices(array $eventServices) : self
    {
        $this->eventServices = $eventServices;
        return $this;
    }
}