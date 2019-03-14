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
    private $note;

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
            case 'location': $this->location   = $blockData;
                break;
            case 'note': $this->note       = $blockData;
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
    public function getNote(): ?string
    {
        return $this->note;
    }
}