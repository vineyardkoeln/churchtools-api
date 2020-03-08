<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection if Resources with methods for sorting
 *
 * @author André Schild
 */
class Resources extends CTObject
{
    // List of resources in master data
    private $resources = [];

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
        $myResource                            = new Resource($blockData);
        $this->resources[$myResource->getId()] = $myResource;
    }

    /**
     * Returns the resource object associated with this ID
     *
     * @param int id of resource to retrieve
     *
     * @return ChurchTools\Api\Resource
     */
    public function getResource($resourceID): Resource
    {
        return $this->resources[$resourceID];
    }

    /**
     * Get list of visible resource ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     *
     * @return array list of resource id's
     */
    public function getResourceIDS($sorted = false): array
    {
        $resources = [];
        foreach ($this->resources as $resource) {
            $id        = $resource->getID();
            $order     = $resource->getSortKey();
            $resources[$id] = $order;
        }
        if ($sorted) {
            asort($resources);
        }
        return array_keys($resources);
    }

    /**
     * Get list of visible resource ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     *
     * @return array list of resource id's
     */
    public function getResourceIDSOfType($resourceTypeID, $sorted = false): array
    {
        $resources = [];
        foreach ($this->resources as $resource) {
            if ($resource->getResourceTypeID() == $resourceTypeID) {
                $id        = $resource->getID();
                $order     = $resource->getSortKey();
                $resources[$id] = $order;
            }
        }
        if ($sorted) {
            asort($resources);
        }
        return array_keys($resources);
    }
}
