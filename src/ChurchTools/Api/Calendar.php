<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use DateTime;

/**
 * Encapsulate a calendar from CT
 *
 * @author André Schild
 */
class Calendar extends CTObject
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

    /**
     *
     * @param bool $hasDataBlock default to false
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     * @inheritdoc
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        switch ($blockName) {
            case 'id': $this->id                = intval($blockData);
                break;
            case 'bezeichnung': $this->name              = $blockData;
                break;
            case 'sortkey': $this->sortkey           = intval($blockData);
                break;
            case 'color': $this->color             = $blockData;
                break;
            case 'oeffentlich_yn': $this->calendar_public   = $blockData == "1";
                break;
            case 'privat_yn': $this->calendar_private  = $blockData == "1";
                break;
            case 'randomurl': $this->random_url        = $blockData;
                break;
            case 'ical_source_url': $this->ical_source_url   = $blockData;
                break;
            case 'station_id': $this->station_id        = intval($blockData);
                break;
            case 'modified_date': $this->modified_date     = new DateTime($blockData);
                break;
            case 'modified_pid': $this->modified_pid      = intval($blockData);
                break;
            case 'event_template_id': $this->event_template_id = intval($blockData);
                break;
            case 'textColor': $this->textColor         = $blockData;
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return int id of calendar
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @return string name of calendar
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int sort order of calendar
     */
    public function getSortKey(): int
    {
        return $this->sortkey;
    }

    /**
     * @return string background color of calendar as html color name or hex value
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string text color of calendar as html color name or hex value
     */
    public function getTextColor(): string
    {
        return $this->textColor;
    }

    /**
     * @return boolean if this calendar can be accessed without login
     */
    public function isCalendarPublic(): bool
    {
        return $this->calendar_public;
    }

    /**
     * @return boolean if this calendar needs login for access
     */
    public function isCalendarPrivate(): bool
    {
        return $this->calendar_private;
    }

    /**
     * @return string the random URL to build ical url
     */
    public function getRandomUrl(): string
    {
        return $this->random_url;
    }

    /**
     * @return string the url of the source calendar (if any)
     */
    public function getIcalSourceURL(): ?string
    {
        return $this->ical_source_url;
    }

    /**
     * @return int the station this calendar is assigned to
     */
    public function getStationID(): int
    {
        return $this->station_id;
    }

    /**
     * 
     * @return date calendar last modified at
     */
    public function getModifiedDate(): ?\DateTime
    {
        return $this->modified_date;
    }

    /**
     * 
     * @return date calendar last modified by person ID
     */
    public function getModifiedByPID(): ?int
    {
        return $this->modified_pid;
    }
}