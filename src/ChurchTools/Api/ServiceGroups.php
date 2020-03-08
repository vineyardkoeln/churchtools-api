<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of ServiceGroup with methods for sorting
 *
 * @author André Schild
 */
class ServiceGroups extends CTObject
{
    // List of service groups in master data
    private $serviceGroups = [];

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
        $myServiceGroup                            = new ServiceGroup($blockData);
        $this->serviceGroups[$myServiceGroup->getId()] = $myServiceGroup;
    }

    /**
     * Returns the resource type object associated with this id
     *
     * @param int id of resource to retrieve
     *
     * @return ChurchTools\Api\ResourceType
     */
    public function getServiceGroup($serviceGroupID): ServiceGroup
    {
        return $this->serviceGroups[$serviceGroupID];
    }

    /**
     * Get list of visible resource types ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     *
     * @return array list of resource types id's
     */
    public function getServiceGroupIDS($sorted = false): array
    {
        $serviceGroups = [];
        foreach ($this->serviceGroups as $serviceGroup) {
            $id        = $serviceGroup->getID();
            $order     = $serviceGroup->getSortKey();
            $serviceGroups[$id] = $order;
        }
        if ($sorted) {
            asort($serviceGroups);
        }
        return array_keys($serviceGroups);
    }
}
