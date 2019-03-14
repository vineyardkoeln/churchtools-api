<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single calendarentry, with bookings if any
 *
 * @author André Schild
 */
class Serviceentry extends CTObject
{
    private $id;
    private $serviceID;
    private $name;
    private $personID;
    private $isAccepted;
    private $isValid;
    private $entryDate;
    private $userID;
    private $userName;
    private $mailSendDate;

    /**
     * @inhertidoc
     */
    public function __construct(array $rawData, bool $hasDataBlock = false): void
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     * @inhertidoc
     */
    protected function handleDataBlock(string $blockName, array $blockData): void
    {
        switch ($blockName) {
            case 'id': $this->id           = intval($blockData);
                break;
            case 'service_id': $this->serviceID    = intval($blockData);
                break;
            case 'name': $this->name         = $blockData;
                break;
            case 'cdb_person_id': $this->personID     = intval($blockData);
                break;
            case 'zugesagt_yn': $this->isAccepted   = $blockData == "1";
                break;
            case 'valid_yn': $this->isValid      = $blockData == "1";
                break;
            case 'datum': $this->entryDate    = $this->parseDateTime($blockData);
                break;
            case 'user_id': $this->userID       = intval($blockData);
                break;
            case 'user': $this->userName     = $blockData;
                break;
            case 'mailsenddate': $this->mailSendDate = $this->parseDateTime($blockData);
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return date start date of service entry
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return date end date of service entry
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * @return string title of service entry
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string remarks of service entry
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    /**
     * 
     * @return int calendar id this entry is for
     */
    public function getCalendarID(): int
    {
        return $this->calendarID;
    }

    /**
     * @return string name of calendar
     */
    public function getCalendarName(): string
    {
        return $this->calendarName;
    }

    /**
     * 
     * @return array Booking of bookings associated with this service entry
     */
    public function getBookings(): ?array
    {
        return $this->bookings;
    }
}