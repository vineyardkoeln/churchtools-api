<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of GroupType with methods for sorting
 *
 * @author André Schild
 */
class GroupTypes extends CTObject
{
    // List of booking status types types in master data
    private $groupTypes = [];

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
        $myGroupType                            = new GroupType($blockData);
        $this->groupTypes[$myGroupType->getId()] = $myGroupType;
    }

    /**
     * Returns the booking status type object associated with this id
     *
     * @param int id of booking status to retrieve
     *
     * @return ChurchTools\Api\BookingStatusType
     */
    public function getGroupType($groupTypeID): GroupType
    {
        return $this->groupTypes[$groupTypeID];
    }

    /**
     * Get list of visible group types status types ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     *
     * @return array list of group types id's
     */
    public function getGroupTypesIDS($sorted = false): array
    {
        $groupTypes = [];
        foreach ($this->groupTypes as $groupType) {
            $id        = $groupType->getID();
            $order     = $groupType->getSortKey();
            $groupTypes[$id] = $order;
        }
        if ($sorted) {
            asort($groupTypes);
        }
        return array_keys($groupTypes);
    }
}
