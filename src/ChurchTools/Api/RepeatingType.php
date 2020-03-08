<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single repeating type of a specific booking
 *
 * @author André Schild
 */
class RepeatingType extends CTObject
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
            case 'id':
                $this->id         = intval($blockData);
                break;
            case 'bezeichnung':
                $this->title       = $blockData;
                break;
            case 'sortkey':
                $this->sortKey       = $blockData;
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * @return int ID of this repeating type
     */
    public function getID(): int
    {
        return $this->id;
    }

  
    /**
     * @return string title of repeating type entry
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public static function isNoRepeat($id): bool
    {
        return $id == 0;
    }
    
    public static function isDailyRepeat($id): bool
    {
        return $id == 1;
    }

    public static function isWeeklyRepeat($id): bool
    {
        return $id == 7;
    }

    public static function isMonthlyByDate($id): bool
    {
        return $id == 31;
    }

    public static function isMonthlyByWeekday($id): bool
    {
        return $id == 32;
    }

    public static function isYearly($id): bool
    {
        return $id == 365;
    }
    
    public static function isManualRepeat(): bool
    {
        return $this->statusID == 999;
    }
}
