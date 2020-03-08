<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of RepeatingType with methods for sorting
 *
 * @author André Schild
 */
class RepeatingTypes extends CTObject
{
    // List of repeating types in master data
    private $repeatingTypes = [];

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
        $myRepeating                            = new RepeatingType($blockData);
        $this->repeatingTypes[$myRepeating->getId()] = $myRepeating;
    }

    /**
     * Returns the repeating type object associated with this repeating type
     *
     * @param int id of repeating type to retrieve
     *
     * @return ChurchTools\Api\RepeatingType
     */
    public function getRepeatingType($repeatingTypeID): RepeatingType
    {
        return $this->repeatingTypes[$repeatingTypeID];
    }

    /**
     * Get list of visible repeating types ID's, optionally sorted by sortKey
     *
     * @param boolean should the ID's be sorted according to the sortkey
     *
     * @return array list of repeating types id's
     */
    public function getRepeatingTypesIDS($sorted = false): array
    {
        $repeatingTypes = [];
        foreach ($this->repeatingTypes as $repeatingType) {
            $id        = $repeatingType->getID();
            $order     = $repeatingType->getSortKey();
            $repeatingTypes[$id] = $order;
        }
        if ($sorted) {
            asort($repeatingTypes);
        }
        return array_keys($repeatingTypes);
    }
}
