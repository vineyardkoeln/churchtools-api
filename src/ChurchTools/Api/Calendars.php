<?php

declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection if Calendars with methods for sorting
 *
 * @author andre
 */
class Calendars extends CTObject {

    // List of calendars in master data
    private $calendars = [];

    public function __construct(array $rawData, $hasDataBlock = false) {
        parent::__construct($rawData, $hasDataBlock);
    }

    protected function handleDataBlock($blockName, $blockData) {
        $calendar= new Calendar($blockData, false);
        $this->calendars[$calendar->getID()]= $calendar;
    }

    /**
     * @param int id of calendar to retrieve
     * 
     * @return ChurchTools\Api\Calendar
     */
    public function getCalendar($calendarID) {
        return $this->calendars[$calendarID];
    }

    /**
     * @param boolean should the ID's be sorted according to the sortkey
     * 
     * @return ChurchTools\Api\Calendar
     */
    public function getCalendarIDS($sorted = false) {
        $cals = [];
        foreach ($this->calendars as $cal) {
            $id = $cal->getID();
            $order = $cal->getSortKey();
            $cals[$id] = $order;
        }
        if ($sorted) {
            asort($cals);
        }
        return $cals;
    }

}
