<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Collection of Persons
 *
 * @author André Schild
 */
class Persons extends CTObject
{
    // List of persons in master data
    private $persons = [];

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
        $myPerson                            = new Person($blockData);
        $this->persons[$myPerson->getId()] = $myPerson;
    }

    public function getPerson($personID): ?Person
    {
        return $this->persons[$personID];
    }

    /**
     * Get list of visible person ids
     * 
     * 
     * @return array list of person id's
     */
    public function getPersonIDS(): array
    {
        return array_keys($this->persons);
    }
    
}