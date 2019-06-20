<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A resource type
 *
 * @author André Schild
 */
class ResourceType extends CTObject
{
    private $id;
    private $sortKey;
    private $description;
    private $stationId;

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
            case 'sortkey': $this->sortKey    = intval($blockData);
                break;
            case 'bezeichnung': $this->description   = $blockData;
                break;
            case 'station_id': $this->stationId = intval($blockData);
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
     * 
     * @return int sortkey of resource type entry
     */
    public function getSortKey(): int
    {
        return $this->sortKey;
    }
    
    /**
     * 
     * @return string Description of this resource type
     * 
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    
    /**
     * 
     * @return int Station id of this resource type
     */
    public function getStationId(): ?int
    {
        return $this->stationId;
    }
}