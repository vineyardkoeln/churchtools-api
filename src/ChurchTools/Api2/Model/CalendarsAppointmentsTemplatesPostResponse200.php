<?php

namespace ChurchTools\Api2\Model;

class CalendarsAppointmentsTemplatesPostResponse200
{
    /**
     *
     *
     * @var AppointmentTemplate[]
     */
    protected $data;
    /**
     *
     *
     * @return AppointmentTemplate[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     *
     *
     * @param AppointmentTemplate[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
