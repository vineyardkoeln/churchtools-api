<?php

namespace ChurchTools\Api2\Model;

class EventsEventIdAgendaGetResponse200
{
    /**
     *
     *
     * @var Agenda
     */
    protected $data;
    /**
     *
     *
     * @return Agenda
     */
    public function getData() : Agenda
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Agenda $data
     *
     * @return self
     */
    public function setData(Agenda $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
