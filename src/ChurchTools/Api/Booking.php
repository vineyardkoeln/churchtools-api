<?php
declare(strict_types=1);

namespace ChurchTools\Api;

/**
 * A single resource booking
 *
 * @author andre
 */
class Booking
{
    private $id;
    private $preTime;
    private $postTime;
    private $resourceID;
    private $statusID;
    private $location;
    private $note;

    public function __construct($bookingData)
    {
        $this->id         = intval($bookingData["id"]);
        $this->preTime    = intval($bookingData["minpre"]);
        $this->postTime   = intval($bookingData["minpost"]);
        $this->resourceID = intval($bookingData["resource_id"]);
        $this->statusID   = intval($bookingData["status_id"]);
        $this->location   = $bookingData["location"];
        $this->note       = $bookingData["note"];
    }
}