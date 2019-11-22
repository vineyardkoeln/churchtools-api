<?php

namespace ChurchTools\Api2\Model;

class PersonsPostBodyPrivacyPolicyAgreement
{
    /**
     * 
     *
     * @var string|null
     */
    protected $date;
    /**
     * 
     *
     * @var int|null
     */
    protected $typeId;
    /**
     * 
     *
     * @var int|null
     */
    protected $whoId;
    /**
     * 
     *
     * @return string|null
     */
    public function getDate() : ?string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date) : self
    {
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTypeId() : ?int
    {
        return $this->typeId;
    }
    /**
     * 
     *
     * @param int|null $typeId
     *
     * @return self
     */
    public function setTypeId(?int $typeId) : self
    {
        $this->typeId = $typeId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWhoId() : ?int
    {
        return $this->whoId;
    }
    /**
     * 
     *
     * @param int|null $whoId
     *
     * @return self
     */
    public function setWhoId(?int $whoId) : self
    {
        $this->whoId = $whoId;
        return $this;
    }
}