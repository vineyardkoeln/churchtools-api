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
    private $serviceId;
    private $startDate;
    private $endDate;
    private $serviceGroupID;
    private $title;
    private $sortKey;
    private $remarks;
    private $name;
    private $user;
    private $hasAccepted;
    private $isValid;
    private $bookings; // Where do we get those from?

    /**
     * @inheritdoc
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
            case 'id':
                $this->id = intval($blockData);
                break;
            case 'service_id':
                $this->serviceId = intval($blockData);
                break;
            case 'servicegroup_id':
                $this->serviceGroupID = intval($blockData);
                break;
            case 'bezeichnung':
                $this->title = $blockData;
                break;
            case 'notiz':
                $this->remarks = $blockData;
                break;
            case 'sortkey':
                $this->sortKey = intval($blockData);
                break;
            case 'name':
                $this->name = $blockData;
                break;
            case 'user':
                $this->user = $blockData;
                break;
            case 'zugesagt_yn':
                $this->hasAccepted = boolval($blockData);
                break;
            case 'valid_yn':
                $this->isValid = boolval($blockData);
                break;
            case 'startdate':
                $this->startDate = new \DateTime($blockData);
                break;
            case 'enddate':
                $this->endDate = new \DateTime($blockData);
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return \DateTime start date of service entry
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime end date of service entry
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
     * @return int calendar id this entry is for
     */
    public function getID(): int
    {
        return $this->id;
    }

    /**
     * @return int service id this entry is for
     */
    public function getServiceID(): int
    {
        return $this->serviceId;
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
     * @return array Array of bookings associated with this service entry
     */
    public function getBookings(): ?array
    {
        return $this->bookings;
    }

    public function getSortKey(): int
    {
        return $this->sortKey;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function hasAccepted(): bool
    {
        return $this->hasAccepted;
    }

    public function isValid(): bool
    {
        return $this->isValid;
    }
}
