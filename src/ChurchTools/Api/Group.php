<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Group
 *
 * @author André Schild
 */
class Group extends CTObject
{
    private $id;
    private $title;
    private $sortKey;
    private $groupTypeID;
    private $groupStatusID;
    private $modifiedDate;
    private $permissionDeepNumber;
    private $parentIDS= array();
    private $childIDS= array();
    

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
            case 'sortkey': $this->sortKey       = $blockData;
                break;
            case 'gruppentyp_id': $this->groupTypeID        = intval($blockData);
                break;
            case 'groupstatus_id': $this->groupStatusID        = intval($blockData);
                break;
            case 'letzteaenderung': $this->modifiedDate      = $this->parseDateTime($blockData);
                break;
            case 'permission_deep_no': $this->permissionDeepNumber         = intval($blockData);
                break;
            case 'parents': $this->parentIDS      = array_map('intval', $blockData);
                break;
            case 'childs': $this->childIDS      =  array_map('intval', $blockData);
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

    public function getGroupTypeId(): ? int
    {
        return $this->groupTypeID;
    }
    
    public function getLastModified(): ?\DateTime
    {
        return $this->modifiedDate;
    }
    
    public function getParentIDS(): ? array
    {
        return $this->parentIDS;
    }
    
    public function getChildIDS(): ? array
    {
        return $this->childIDS;
    }
    
    public function getPermissionDeepNumber(): ? int
    {
        return $this->permissionDeepNumber;
    }
    
    
}
