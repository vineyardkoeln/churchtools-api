<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItemSong
{
    /**
     *
     *
     * @var int
     */
    protected $songId;
    /**
     *
     *
     * @var int
     */
    protected $arrangementId;
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
    protected $arrangement;
    /**
     *
     *
     * @var string
     */
    protected $category;
    /**
     *
     *
     * @var string
     */
    protected $key;
    /**
     *
     *
     * @var string
     */
    protected $bpm;
    /**
     *
     *
     * @var string
     */
    protected $defaultArrangement;
    /**
     *
     *
     * @return int
     */
    public function getSongId() : int
    {
        return $this->songId;
    }
    /**
     *
     *
     * @param int $songId
     *
     * @return self
     */
    public function setSongId(int $songId) : self
    {
        $this->songId = $songId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getArrangementId() : int
    {
        return $this->arrangementId;
    }
    /**
     *
     *
     * @param int $arrangementId
     *
     * @return self
     */
    public function setArrangementId(int $arrangementId) : self
    {
        $this->arrangementId = $arrangementId;
        return $this;
    }
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
    public function getArrangement() : string
    {
        return $this->arrangement;
    }
    /**
     *
     *
     * @param string $arrangement
     *
     * @return self
     */
    public function setArrangement(string $arrangement) : self
    {
        $this->arrangement = $arrangement;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     *
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     *
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getBpm() : string
    {
        return $this->bpm;
    }
    /**
     *
     *
     * @param string $bpm
     *
     * @return self
     */
    public function setBpm(string $bpm) : self
    {
        $this->bpm = $bpm;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getDefaultArrangement() : string
    {
        return $this->defaultArrangement;
    }
    /**
     *
     *
     * @param string $defaultArrangement
     *
     * @return self
     */
    public function setDefaultArrangement(string $defaultArrangement) : self
    {
        $this->defaultArrangement = $defaultArrangement;
        return $this;
    }
}
