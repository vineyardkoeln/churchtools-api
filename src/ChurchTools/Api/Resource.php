<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single resource
 *
 * @author André Schild
 */
class Resource extends CTObject
{
    private $id;
    private $resourcetype_id;
    private $sortkey;
    private $bezeichnung;
    private $location;
    private $ical_location;
    private $autoaccept_yn;
    private $bookingrequirescalendarenry_yn;
    private $adminPersonIds;
    private $virtual_yn;
    private $randomURL;

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
            case 'resourcetype_id': $this->resourcetype_id    = intval($blockData);
                break;
            case 'sortkey': $this->sortkey   = intval($blockData);
                break;
            case 'bezeichnung': $this->bezeichnung = $blockData;
                break;
            case 'location': $this->location   = $blockData;
                break;
            case 'ical_location': $this->ical_location   = $blockData;
                break;
            case 'autoaccept_yn': $this->autoaccept_yn       = $blockData == "1";
                break;
            case 'bookingrequirescalendarentry_yn': $this->bookingrequirescalendarenry_yn       = $blockData == "1";
                break;
            case 'admin_person_ids': $this->adminPersonIds= $this->parseAdminIDS($blockData);
                break;
            case 'virtual_yn': $this->virtual_yn       = $blockData == "1";
                break;
            case 'randomurl': $this->randomURL       = $blockData;
                break;
            default:
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
     * @return int ID of the resource type
     */
    public function getResourceTypeID(): int
    {
        return $this->resourcetype_id;
    }

    /**
     * 
     * @return int sort order of resource
     * 
     */
    public function getSortKey(): int
    {
        return $this->sortkey;
    }

    /**
     * 
     * @return string name of resource
     */
    public function getDescription(): string
    {
        return $this->bezeichnung;
    }
    
    /**
     * @return string|null Location
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @return string|null ical location
     */
    public function getIcalLocation(): ?string
    {
        return $this->ical_location;
    }

    /**
     * 
     * @return boolean auto accept new bookings
     */
    public function getAutoAccept(): boolean
    {
        return $this->autoaccept_yn;
    }

    /**
     * 
     * @return boolean booking requires a associated calendar entry
     */
    public function getBookingRequiresCalendarEntry(): boolean
    {
        return $this->bookingrequirescalendarenry_yn;
    }
    
    /**
     * 
     * @return boolean true if it's a virtual resource
     */
    public function getVirtual(): boolean
    {
        return $this->virtual_yn;
    }
    
    public function getAdminUserIds():array
    {
        return $this->adminPersonIds;
    }
    
    /**
     * 
     * @return string random URL string
     */
    public function getRandomUrl(): string
    {
        return $this->randomURL;
    }
    
}
