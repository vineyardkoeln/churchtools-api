<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Group type
 *
 * @author André Schild
 */
class GroupType extends CTObject
{
    private $id;
    private $title;
    private $sortKey;
    private $requireLeader;
    private $showInCreatePerson;
    private $permissionDeepNumber;

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
            case 'id': $this->id         = intval($blockData);
                break;
            case 'bezeichnung': $this->title       = $blockData;
                break;
            case 'sortkey': $this->sortKey       = intval($blockData);
                break;
            case 'muss_leiter_enthalten_yn': $this->requireLeader         = $blockData == "1";
                break;
            case 'in_neue_person_erstellen_yn': $this->showInCreatePerson         = $blockData == "1";
                break;
            case 'permission_deep_no': $this->permissionDeepNumber         = intval($blockData);
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

  
    /**
     * @return string title of booking status entry
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * 
     * @return int sortkey of resource type entry
     */
    public function getSortKey(): int
    {
        return $this->sortKey;
    }
    
    public function isRequireLeader(): ? bool
    {
        return $this->requireLeader;
    }
    
    public function isShowInCreatePerson(): ? bool
    {
        return $this->showInCreatePerson;
    }
    
    public function getPermissionDeepNumber(): ? int
    {
        return $this->permissionDeepNumber;
    }
    
}
