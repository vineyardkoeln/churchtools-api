<?php

namespace ChurchTools\Api2\Model;

class TagsPostBody
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
    protected $type;
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
    public function getType() : string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}
