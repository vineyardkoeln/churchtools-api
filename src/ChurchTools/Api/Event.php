<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\Booking;

/**
 * A single event, with bookings if any
 *
 * @author andre
 */
class Event
{
    private $startDate;
    private $endDate;
    private $title;
    private $calendarID;
    private $calendarName;
    private $remarks;
    private $bookings;

    public function __construct($eventData)
    {
        $this->startDate = strtotime($eventData["startdate"]);
        $this->endDate   = strtotime($eventData["enddate"]);
        $this->title     = $eventData["bezeichnung"];
        if (array_key_exists("notizen", $eventData)) {
            $this->remarks = $eventData["notizen"];
        }
        $this->calendarID   = intval($eventData["category_id"]);
        $this->calendarName = $eventData["category_name"];
        if (array_key_exists("bookings", $eventData)) {
            $bookings    = [];
            $bookingData = $eventData["bookings"];
            foreach ($bookingData as $b) {
                array_push($bookings, new Booking($b));
            }
            $this->bookings = $bookings;
        }
    }

    /**
     * @return date start date of calenda entry
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return date end date of calenda entry
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return string title of calenda entry
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string remarks of calendar entry
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * 
     * @return int calendar id this entry is for
     */
    public function getCalendarID()
    {
        return $this->calendarID;
    }

    /**
     * @return string name of calendar
     */
    public function getCalendarName()
    {
        return $this->calendarName;
    }

    /**
     * 
     * @return array Booking of bookings associated with this calendar entry
     */
    public function getBookings()
    {
        return $this->bookings;
    }
}