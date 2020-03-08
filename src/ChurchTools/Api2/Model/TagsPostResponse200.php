<?php

namespace ChurchTools\Api2\Model;

class TagsPostResponse200
{
    /**
     *
     *
     * @var Tag
     */
    protected $data;
    /**
     *
     *
     * @return Tag
     */
    public function getData() : Tag
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Tag $data
     *
     * @return self
     */
    public function setData(Tag $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
