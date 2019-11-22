<?php

namespace ChurchTools\Api2\Model;

class Log
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * The log level indicates the importance. 1 = Warning, 2 = Notice, 3 = Info.
     *
     * @var int
     */
    protected $level;
    /**
     * Timestamp of log
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * If the person ID is `-1`, that means, no person but the system itself has logged that message.
     *
     * @var int
     */
    protected $personId;
    /**
     * If a person is simulated by an administrator, we log the personId as well. This makes it possible to see if a person did the action or an admin, who simulated that person.
     *
     * @var int|null
     */
    protected $simultePersonId;
    /**
     * The domain type tells us, where in ChurchTools the action was performed.
     *
     * @var string
     */
    protected $domainType;
    /**
     * Analog to the domain type, the ID is the explicit resource.
     *
     * @var int
     */
    protected $domainId;
    /**
     * 
     *
     * @var string
     */
    protected $message;
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
     * The log level indicates the importance. 1 = Warning, 2 = Notice, 3 = Info.
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * The log level indicates the importance. 1 = Warning, 2 = Notice, 3 = Info.
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Timestamp of log
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * Timestamp of log
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * If the person ID is `-1`, that means, no person but the system itself has logged that message.
     *
     * @return int
     */
    public function getPersonId() : int
    {
        return $this->personId;
    }
    /**
     * If the person ID is `-1`, that means, no person but the system itself has logged that message.
     *
     * @param int $personId
     *
     * @return self
     */
    public function setPersonId(int $personId) : self
    {
        $this->personId = $personId;
        return $this;
    }
    /**
     * If a person is simulated by an administrator, we log the personId as well. This makes it possible to see if a person did the action or an admin, who simulated that person.
     *
     * @return int|null
     */
    public function getSimultePersonId() : ?int
    {
        return $this->simultePersonId;
    }
    /**
     * If a person is simulated by an administrator, we log the personId as well. This makes it possible to see if a person did the action or an admin, who simulated that person.
     *
     * @param int|null $simultePersonId
     *
     * @return self
     */
    public function setSimultePersonId(?int $simultePersonId) : self
    {
        $this->simultePersonId = $simultePersonId;
        return $this;
    }
    /**
     * The domain type tells us, where in ChurchTools the action was performed.
     *
     * @return string
     */
    public function getDomainType() : string
    {
        return $this->domainType;
    }
    /**
     * The domain type tells us, where in ChurchTools the action was performed.
     *
     * @param string $domainType
     *
     * @return self
     */
    public function setDomainType(string $domainType) : self
    {
        $this->domainType = $domainType;
        return $this;
    }
    /**
     * Analog to the domain type, the ID is the explicit resource.
     *
     * @return int
     */
    public function getDomainId() : int
    {
        return $this->domainId;
    }
    /**
     * Analog to the domain type, the ID is the explicit resource.
     *
     * @param int $domainId
     *
     * @return self
     */
    public function setDomainId(int $domainId) : self
    {
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}