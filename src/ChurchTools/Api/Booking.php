<?php

declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single resource booking
 *
 * @author andre
 */
class Booking extends CTObject {

    private $id;
    private $preTime;
    private $postTime;
    private $resourceID;
    private $statusID;
    private $location;
    private $note;

    public function __construct(array $rawData, $hasDataBlock = false) {
        parent::__construct($rawData, $hasDataBlock);
    }
    
    protected function handleDataBlock($blockName, $blockData) {
        switch ($blockName) {
            case 'id': $this->id = intval($blockData);
                break;
            case 'minpre': $this->preTime = intval($blockData);
                break;
            case 'minpost': $this->postTime = intval($blockData);
                break;
            case 'resource_id': $this->resourceID = intval($blockData);
                break;
            case 'status_id': $this->statusID = intval($blockData);
                break;
            case 'location': $this->location = $blockData;
                break;
            case 'note': $this->note = $blockData;
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

}
