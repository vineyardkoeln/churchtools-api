<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * Group type
 *
 * @author André Schild
 */
class GroupMeeting extends CTObject
{
    private $id;
    private $groupId;
    private $remark;
    private $numGuests;
    private $startDate;
    private $endDate;
    private $modifiedDate;
    private $modifiedPersonId;
    private $entryDone;
    private $meetingCanceled;
    private $pollResult;
    private $entries;

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
            case 'gruppe_id': $this->groupId         = intval($blockData);
                break;
            case 'kommentar': $this->remark       = $blockData;
                break;
            case 'anzahl_gaeste': $this->numGuests       = intval($blockData);
                break;
            case 'datumvon': $this->startDate= $this->parseDateTime($blockData);
                break;
            case 'datumbis': $this->endDate= $this->parseDateTime($blockData);
                break;
            case 'modified_date': $this->modifiedDate= $this->parseDateTime($blockData);
                break;
            case 'modified_pid': $this->modifiedPersonId         = intval($blockData);
                break;
            case 'eintragerfolgt_yn': $this->entryDone         = intval($blockData);
                break;
            case 'ausgefallen_yn': $this->meetingCanceled          = intval($blockData);
                break;
            case 'pollresult': $this->pollResult          = $blockData;
                break;
            case 'entries': $this->entries          = $blockData;
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
     * @return string remark of entry
     */
    public function getRemarks(): ?string
    {
        return $this->remark;
    }
    
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }
    
    public function getPollResult()
    {
        return $this->pollResult;
    }
    
    public function isMeetingCanceled(): bool
    {
        return $this->meetingCanceled == 1;
    }

    public function isMeetingDone(): bool
    {
        return $this->entryDone == 1;
    }
    
}
