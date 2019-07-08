<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Person
 *
 * @author André Schild
 */
class Person extends CTObject
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $active;
    private $groupMemberShip;
    

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
            case 'p_id': $this->id         = intval($blockData);
                break;
            case 'name': $this->lastName       = $blockData;
                break;
            case 'vorname': $this->firstName       = $blockData;
                break;
            case 'em': $this->email        = intval($blockData);
                break;
            case 'active_yn': $this->active        = $blockData == "1";
                break;
            case "groupmembers": $this->groupMemberShip= $blockData;
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return int ID of this booking status
     */
    public function getID(): int
    {
        return $this->id;
    }

  
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ? String
    {
        return $this->lastName;
    }

    public function getEmail(): ? String
    {
        return $this->email;
    }
    
    public function isActive(): boolean
    {
        return $this->active;
    }

    public function getGroupMemberShip()
    {
        return $this->groupMemberShip;
    }
}
