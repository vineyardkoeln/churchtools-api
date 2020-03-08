<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection if Calendars with methods for sorting
 *
 * @author André Schild
 */
class Calendars extends CTObject
{
    // List of calendars in master data
    private $calendars = [];

    /**
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        $myCal                            = new Calendar($blockData);
        $this->calendars[$myCal->getId()] = $myCal;
    }

    /**
     * Returns the calendar object associated with this calendarID
     *
     * @param int id of calendar to retrieve
     *
     * @return ChurchTools\Api\Calendar
     */
    public function getCalendar($calendarID): Calendar
    {
        return $this->calendars[$calendarID];
    }

    /**
     * Get list of visible calendar ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     *
     * @return array list of calendar id's
     */
    public function getCalendarIDS($sorted = false): array
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
        return array_keys($cals);
    }
}
