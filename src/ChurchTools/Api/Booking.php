<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single resource booking of a specific Resource
 *
 * @author André Schild
 */
class Booking extends CTObject
{
    private $id;
    private $preTime;
    private $postTime;
    private $resourceID;
    private $statusID;
    private $location;
    private $remarks;
    private $title;
    private $personID;
    private $startDate;
    private $endDate;
    private $createDate;
    private $modifiedDate;
    private $version;
    private $calendarEntryID;
    private $calendarID;

    /**
     * @inheritDoc
     *
     * @param bool $hasDataBlock default value false
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     * @inheritDoc
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        switch ($blockName) {
            case 'id': $this->id         = intval($blockData);
                break;
            case 'minpre': $this->preTime    = intval($blockData);
                break;
            case 'minpost': $this->postTime   = intval($blockData);
                break;
            case 'resource_id': $this->resourceID = intval($blockData);
                break;
            case 'status_id': $this->statusID   = intval($blockData);
                break;
            case 'person_id': $this->personID = intval($blockData);
                break;
            case 'location': $this->location   = $blockData;
                break;
            case 'note': $this->remarks       = $blockData;
                break;
            case 'text': $this->title       = $blockData;
                break;
            case 'version': $this->version       = $blockData;
                break;
            case 'startdate': $this->startDate    = $this->parseDateTime($blockData);
                break;
            case 'enddate': $this->endDate      = $this->parseDateTime($blockData);
                break;
            case 'create_date': $this->createDate    = $this->parseDateTime($blockData);
                break;
            case 'modified_date': $this->modifiedDate      = $this->parseDateTime($blockData);
                break;
            case 'cc_cal_id': $this->calendarEntryID      = intval($blockData);
                break;
            case 'category_id': $this->calendarID      = intval($blockData);
                break;
            default:
                var_dump($blockName);
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return int ID of this booking
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @return the amount of minutes this resource should be reserved before the event starts
     */
    public function getPreTime(): int
    {
        return $this->preTime;
    }

    /**
     * @return the amount of minutes this resource should be reserved after the event ends
     */
    public function getPostTime(): int
    {
        return $this->postTime;
    }

    /**
     * @return int ID of the resource we are booking
     */
    public function getResourceID(): int
    {
        return $this->resourceID;
    }

    /**
     * @return int ID of the status of the booking
     */
    public function getStatusID(): int
    {
        return $this->statusID;
    }

    /**
     * @return string|null Location of the booking
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @return string|null note of the booking
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }
    
    /**
     * @return \DateTime start date of calendar entry
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return date end date of calenda entry
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @return string title of calenda entry
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function isConfirmed(): bool
    {
        return BookingStatusType::isConfirmed($this->statusID);
    }
    
    public function isWaitingConfirmation(): bool
    {
        return BookingStatusType::isWaitingConfirmation($this->statusID);
    }

    public function isRejected(): bool
    {
        return BookingStatusType::isRejected($this->statusID == 3);
    }

    public function isDeleted(): bool
    {
        return BookingStatusType::isDeleted($this->statusID == 99);
    }
    
    public function getCalendarEntryID(): ?int
    {
        return $this->calendarEntryID;
    }
    
    public function getCalendarID(): ?int
    {
        return $this->calendarID;
    }

}