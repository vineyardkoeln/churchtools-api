<?php

namespace ChurchTools\Api2\Model;

class Department
{
    /**
     * ID of department
     *
     * @var int
     */
    protected $id;
    /**
     * Department name
     *
     * @var string
     */
    protected $name;
    /**
     * Abbreviation
     *
     * @var string
     */
    protected $shorty;
    /**
     * Used to sort all departments
     *
     * @var int
     */
    protected $sortKey;
    /**
     * ID of department
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of department
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
     * Department name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Department name
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
     * Abbreviation
     *
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * Abbreviation
     *
     * @param string $shorty
     *
     * @return self
     */
    public function setShorty(string $shorty) : self
    {
        $this->shorty = $shorty;
        return $this;
    }
    /**
     * Used to sort all departments
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * Used to sort all departments
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
}