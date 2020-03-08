<?php

namespace ChurchTools\Api2\Model;

class CalendarsAppointmentsTemplatesTemplateIdPutResponse200
{
    /**
     *
     *
     * @var AppointmentTemplate
     */
    protected $data;
    /**
     *
     *
     * @return AppointmentTemplate
     */
    public function getData() : AppointmentTemplate
    {
        return $this->data;
    }
    /**
     *
     *
     * @param AppointmentTemplate $data
     *
     * @return self
     */
    public function setData(AppointmentTemplate $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
