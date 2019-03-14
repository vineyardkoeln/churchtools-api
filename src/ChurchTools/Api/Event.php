<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use DateTime;

/**
 * A single event from the churchservice module
 *
 * @author André Schild
 */
class Event extends CTObject
{
    private $id;
    private $isValid;
    private $startDate;
    private $endDate;
    private $calendarStartDate;
    private $calendarEndDate;
    private $calendarID;
    private $title;
    private $moreInfos;
    private $remarks;
    private $cc_cal_id;
    private $repeatID;
    private $repeatUntil;
    private $repeatFrequence;
    private $repeatOptionID;
    private $isInternal;
    private $location;
    private $link;
    private $dateDiff;
    private $isAgenda;
    private $adminIDS;
    private $serviceEntries;

    /**
     * @inheritdoc
     */
    protected function handleDataBlock(string $blockName, array $blockData): void
    {
        switch ($blockName) {
            case 'id': $this->id                = intval($blockData);
                break;
            case 'startdate': $this->startDate         = $this->parseDateTime($blockData);
                break;
            case 'enddate': $this->endDate           = $this->parseDateTime($blockData);
                break;
            case 'valid_yn': $this->isValid           = $blockData == "1";
                break;
            case 'cal_startdate': $this->calendarStartDate = $this->parseDateTime($blockData);
                break;
            case 'cal_enddate': $this->calendarEndDate   = $this->parseDateTime($blockData);
                break;
            case 'cc_cal_id': $this->cc_cal_id         = intval($blockData);
                break;
            case 'bezeichnung': $this->title             = $blockData;
                break;
            case 'special': $this->moreInfos         = $blockData;
                break;
            case 'category_id': $this->calendarID        = intval($blockData);
                break;
            case 'repeat_id': $this->repeatID          = intval($blockData);
                break;
            case 'repeat_until': $this->repeatUntil       = new DateTime($blockData);
                break;
            case 'repeat_frequence': $this->repeatFrequence   = intval($blockData);
                break;
            case 'repeat_option_id': $this->repeatOptionID    = intval($blockData);
                break;
            case 'intern_yn': $this->isInternal        = $blockData == '1';
                break;
            case 'notizen': $this->remarks           = $blockData;
                break;
            case 'ort': $this->location          = $blockData;
                break;
            case 'link': $this->link              = $blockData;
                break;
            case 'datediff': $this->dateDiff          = intval($blockData);
                break;
            case 'agenda': $this->isAgenda          = $blockData == '1';
                break;
            case 'admin' : $this->adminIDS          = $this->parseAdminIDS($blockData);
                break;
            case 'bookings':
                $bookings                = [];
                $bookingData             = $blockData["bookings"];
                foreach ($bookingData as $b) {
                    array_push($bookings, new Booking($b));
                }
                $this->bookings = $bookings;
                break;
            case 'services':
                $services       = [];
                foreach ($blockData as $s) {
                    array_push($services, new Serviceentry($s));
                }
                $this->serviceEntries = $services;
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function isValid(): bool
    {
        return $this->isValid;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function getCalendarStartDate(): \DateTime
    {
        return $this->calendarStartDate;
    }

    public function getCalendarEndDate(): \DateTime
    {
        return $this->calendarEndDate;
    }

    public function getCalendarID(): int
    {
        return $this->calendarID;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getMoreInfos(): ?string
    {
        return $this->moreInfos;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    /**
     * No idea what is inside...
     * @todo Find out field meaning
     */
    public function getCCCalID()
    {
        return $this->cc_cal_id;
    }

    public function getRepeatID(): ?int
    {
        return $this->repeatID;
    }

    public function getRepeatUntil(): ?\DateTime
    {
        return $this->repeatUntil;
    }

    public function getRepeatFrequence()
    {
        return $this->repeatFrequence;
    }

    public function getRepeatOptionID()
    {
        return $this->repeatOptionID;
    }

    public function isInternal(): bool
    {
        return $this->isInternal;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function getDateDiff(): int
    {
        return $this->dateDiff;
    }

    public function isAgenda(): bool
    {
        return $this->isAgenda;
    }

    public function getAdminIDS(): ?array
    {
        return $this->adminIDS;
    }

    public function getServicenetries(): ?array
    {
        return $this->serviceEntries;
    }
}