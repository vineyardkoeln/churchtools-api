<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single calendarentry, with bookings if any
 *
 * @author André Schild
 */
class ServiceEntry extends CTObject
{
    private $id;
    private $serviceGroupID;
    private $title;
    private $sortKey;
    private $remarks;

    /**
     * @inhertidoc
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     * @inhertidoc
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        var_dump($blockName);
        switch ($blockName) {
            case 'id': $this->id           = intval($blockData);
                break;
            case 'servicegroup_id': $this->serviceGroupID    = intval($blockData);
                break;
            case 'bezeichnung': $this->title         = $blockData;
                break;
            case 'notiz': $this->remarks         = $blockData;
                break;
            case 'sortkey': $this->sortKey   = intval($blockData);
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
     * @return string name of service entry
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
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * 
     * @return int calendar id this entry is for
     */
    public function getServiceGroupID(): int
    {
        return $this->serviceGroupID;
    }
    
    /**
     * 
     * @return array Booking of bookings associated with this service entry
     */
    public function getBookings(): ?array
    {
        return $this->bookings;
    }
    
    public function getSortKey(): int
    {
        return $this->sortKey;
    }
}