<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of ResourceTypes with methods for sorting
 *
 * @author André Schild
 */
class ResourceTypes extends CTObject
{
    // List of calendars in master data
    private $resourceTypes = [];

    /**
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        $myResource                            = new ResourceType($blockData);
        $this->resourceTypes[$myResource->getId()] = $myResource;
    }

    /**
     * Returns the calendar object associated with this calendarID
     *
     * @param int id of resource to retrieve
     * 
     * @return ChurchTools\Api\ResourceType
     */
    public function getResourceType($resourceTypeID): ResourceType
    {
        return $this->resourceTypes[$resourceTypeID];
    }

    /**
     * Get list of visible resource types ID's, optionally sorted by sortKey
     * 
     * @param boolean should the ID's be sorted according to the sortkey
     * 
     * @return array list of resource types id's
     */
    public function getResourceTypesIDS($sorted = false): array
    {
        $resourceTypes = [];
        foreach ($this->resourceTypes as $resourceType) {
            $id        = $resourceType->getID();
            $order     = $resourceType->getSortKey();
            $resourceTypes[$id] = $order;
        }
        if ($sorted) {
            asort($resourceTypes);
        }
        return array_keys($resourceTypes);
    }
}