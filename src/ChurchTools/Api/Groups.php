<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of Groups with methods for sorting
 *
 * @author André Schild
 */
class Groups extends CTObject
{
    // List of groups in master data
    private $groups = [];

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
        $myGroup                            = new Group($blockData);
        $this->groups[$myGroup->getId()] = $myGroup;
    }

    /**
     * Returns the group object associated with this id
     *
     * @param int id of group to retrieve
     * 
     * @return ChurchTools\Api\Group
     */
    public function getGroupByID($groupID): Group
    {
        return $this->groups["$groupID"];
    }

    /**
     * Get list of visible group types status types ID's, optionally sorted by sortKey
     * 
     * @param boolean should the ID's be sorted according to the sortkey
     * 
     * @return array list of group types id's
     */
    public function getGroupIDS($sorted = false): array
    {
        $groups = [];
        foreach ($this->groups as $group) {
            $id        = $group->getID();
            $order     = $group->getSortKey();
            $groups[$id] = $order;
        }
        if ($sorted) {
            asort($groups);
        }
        return array_keys($groups);
    }

    /**
     * Get list of visible group types status types ID's, optionally sorted by sortKey
     * 
     * @param boolean should the ID's be sorted according to the sortkey
     * 
     * @return array list of group types id's
     */
    public function getGroupsOfType($groupTypeID): array
    {
        $groups = [];
        foreach ($this->groups as $group) {
            if ($group->getGroupTypeId() == $groupTypeID)
            {
                $id= $group->getId();
                $groups[$id] = $group;
            }
        }
        return $groups;
    }
    
}