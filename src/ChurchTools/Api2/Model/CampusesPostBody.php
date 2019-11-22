<?php

namespace ChurchTools\Api2\Model;

class CampusesPostBody
{
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
    protected $shorty;
    /**
     * 
     *
     * @var int
     */
    protected $sortKey = 10;
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
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * 
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
}