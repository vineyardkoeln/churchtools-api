<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Description of Calendar
 *
 * @author andre
 */
class Calendar
{
    private $id;            // Calendar ID required for API calls
    private $station_id;    // Station id of this calendar
    private $name;          // Name of calendar
    private $sortkey;       // Sortkey of the calendar
    private $color;         // HTML color of the calendar
    private $textColor;         // Color of text
    private $calendar_public;   // Is calendar public without login
    private $calendar_private;  // Is calendar private (needs login)
    private $random_url;        // Radon url of the calendar (Used for iCal stuff)
    private $ical_source_url;   // Ical source if a external ical calendar
    private $modified_date;     // Calendar last modified
    private $modified_pid;      // Modified by person
    private $event_template_id; // Event template id

    public function __construct($calendarMasterData)
    {
        $this->id                = intval($calendarMasterData["id"]);
        $this->name              = $calendarMasterData["bezeichnung"];
        $this->sortkey           = intval($calendarMasterData["sortkey"]);
        $this->color             = $calendarMasterData["color"];
        $this->calendar_public   = $calendarMasterData["oeffentlich_yn"] === "1";
        $this->calendar_private  = $calendarMasterData["privat_yn"] === "1";
        $this->random_url        = $calendarMasterData["randomurl"];
        $this->ical_source_url   = $calendarMasterData["ical_source_url"];
        $this->station_id        = intval($calendarMasterData["station_id"]);
        $this->modified_date     = strtotime($calendarMasterData["modified_date"]);
        $this->modified_pid      = intval($calendarMasterData["modified_pid"]);
        $this->event_template_id = intval($calendarMasterData["event_template_id"]);
        $this->textColor         = $calendarMasterData["textColor"];
    }

    /**
     * @return int id of calendar
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return string name of calendar
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int sort order of calendar
     */
    public function getSortKey()
    {
        return $this->sortkey;
    }

    /**
     * @return string background color of calendar as html color name or hex value
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return string text color of calendar as html color name or hex value
     */
    public function getTextColor()
    {
        return $this->textColor;
    }

    /**
     * @return boolean if this calendar can be accessed without login
     */
    public function isCalendarPublic()
    {
        return $this->calendar_public;
    }

    /**
     * @return boolean if this calendar needs login for access
     */
    public function isCalendarPrivate()
    {
        return $this->calendar_private;
    }

    /**
     * @return string the random URL to build ical url
     */
    public function getRandomUrl()
    {
        return $this->random_url;
    }

    /**
     * @return string the url of the source calendar (if any)
     */
    public function getIcalSourceURL()
    {
        return $this->ical_source_url;
    }

    /**
     * @return int the station this calendar is assigned to
     */
    public function getStationID()
    {
        return $this->station_id;
    }

    /**
     * 
     * @return date calendar last modified at
     */
    public function getModifiedDate()
    {
        return $this->modified_date;
    }

    /**
     * 
     * @return date calendar last modified by person ID
     */
    public function getModifiedByPID()
    {
        return $this->modified_pid;
    }
}