<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\Calendar;

/**
 * Description of Calendars
 *
 * @author andre
 */
class Calendars
{
    // List of calendars in master data
    private $calendars = [];

    public function __construct($masterData)
    {
        $categories = $masterData["data"]["category"];
        foreach ($categories as $cal) {
            $myCal                            = new Calendar($cal);
            $this->calendars[$myCal->getId()] = $myCal;
        }
    }

    /**
     * @param int id of calendar to retrieve
     * 
     * @return ChurchTools\Api\Calendar
     */
    public function getCalendar($calendarID)
    {
        return $this->calendars[$calendarID];
    }

    /**
     * @param boolean should the ID's be sorted according to the sortkey
     * 
     * @return ChurchTools\Api\Calendar
     */
    public function getCalendarIDS($sorted = false)
    {
        $cals = [];
        foreach ($this->calendars as $cal) {
            $id        = $cal->getID();
            $order     = $cal->getSortKey();
            $cals[$id] = $order;
        }
        if ($sorted) {
            asort($cals);
        }
        return $cals;
    }
}