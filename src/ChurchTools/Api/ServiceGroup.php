<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A service group type
 *
 * @author André Schild
 */
class ServiceGroup extends CTObject
{
    private $id;
    private $serviceGroupId;
    private $sortKey;
    private $description;
    private $remarks;
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
            case 'id':
                $this->id         = intval($blockData);
                break;
            case 'servicegroup_id':
                $this->serviceGroupId = intval($blockData);
                break;
            case 'sortkey':
                $this->sortKey    = intval($blockData);
                break;
            case 'bezeichnung':
                $this->description   = $blockData;
                break;
            case 'notiz':
                $this->remarks   = $blockData;
                break;
            case 'station_id':
                $this->stationId = intval($blockData);
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return int ID of this resource type
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
    
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }
    
    public function getServiceGroupID(): int
    {
        return $this->serviceGroupId;
    }
}
