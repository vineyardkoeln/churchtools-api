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

    public static function isConfirmed($statusID): bool
    {
        return $statusID == 2;
    }
    
    public static function isWaitingConfirmation($statusID): bool
    {
        return $statusID == 1;
    }

    public static function isRejected($statusID): bool
    {
        return $statusID == 3;
    }

    public static function isDeleted($statusID): bool
    {
        return $statusID == 99;
    }
}
