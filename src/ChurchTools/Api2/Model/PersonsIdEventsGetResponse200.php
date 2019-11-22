<?php

namespace ChurchTools\Api2\Model;

class PersonsIdEventsGetResponse200
{
    /**
     * 
     *
     * @var Event
     */
    protected $data;
    /**
     * 
     *
     * @return Event
     */
    public function getData() : Event
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Event $data
     *
     * @return self
     */
    public function setData(Event $data) : self
    {
        $this->data = $data;
        return $this;
    }
}