<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of ServiceGroup with methods for sorting
 *
 * @author André Schild
 */
class ServiceEntries extends CTObject
{
    // List of service groups in master data
    private $serviceEntries = [];

    /**
     * ServiceEntries constructor.
     * @param array $rawData
     * @param bool $hasDataBlock
     */
    public function __construct(array $rawData, bool $hasDataBlock = false)
    {
        parent::__construct($rawData, $hasDataBlock);
    }

    /**
     * @param string $blockName
     * @param array|string $blockData
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        $myServiceGroup                            = new ServiceEntry($blockData);
        $this->serviceEntries[$myServiceGroup->getId()] = $myServiceGroup;
    }

    /**
     * Returns the resource type object associated with this id
     *
     * @param int id of resource to retrieve
     * @return ServiceEntry
     */
    public function getService($serviceID): ServiceEntry
    {
        return $this->serviceEntries[$serviceID];
    }

    /**
     * Get list of visible resource types ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     * @return array list of resource types id's
     */
    public function getServiceGroupIDS($sorted = false): array
    {
        $serviceEntries = [];
        foreach ($this->serviceEntries as $serviceEntry) {
            $id        = $serviceEntry->getID();
            $order     = $serviceEntry->getSortKey();
            $serviceEntries[$id] = $order;
        }
        if ($sorted) {
            asort($serviceEntries);
        }
        return array_keys($serviceEntries);
    }


    /**
     * Get list of visible resource ID's, optionally sorted by sortKey
     *
     * @param int $serviceGroupID should the ID's be sorted according to the sortkey
     * @param boolean $sorted
     * @return array list of resource id's
     */
    public function getServiceIDSOfGroup($serviceGroupID, $sorted = false): array
    {
        $services = [];
        foreach ($this->serviceEntries as $serviceEntry) {
            if ($serviceEntry->getServiceGroupID() == $serviceGroupID) {
                $id        = $serviceEntry->getID();
                $order     = $serviceEntry->getSortKey();
                $services[$id] = $order;
            }
        }
        if ($sorted) {
            asort($services);
        }
        return array_keys($services);
    }

}
