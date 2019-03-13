<?php

declare(strict_types=1);

namespace ChurchTools\Api;

use DateTime;

/**
 * A single event
 *
 * @author andre
 */
class Event extends CTObject {

    private $id;
    private $isValid;
    private $startDate;
    private $endDate;
    private $calendarStartDate;
    private $calendarEndDate;
    private $calendarID;
    private $title;
    private $moreInfos;
    private $remarks;
    private $cc_cal_id;
    private $repeatID;
    private $repeatUntil;
    private $repeatFrequence;
    private $repeatOptionID;
    private $isInternal;
    private $location;
    private $link;
    private $dateDiff;
    private $isAgenda;
    private $adminIDS;
    private $serviceEntries;

    protected function handleDataBlock($blockName, $blockData) {
        switch ($blockName) {
            case 'id': $this->id = intval($blockData);
                break;
            case 'startdate': $this->startDate = $this->parseDateTime($blockData);
                break;
            case 'enddate': $this->endDate = $this->parseDateTime($blockData);
                break;
            case 'valid_yn': $this->isValid = $blockData == "1";
                break;
            case 'cal_startdate': $this->calendarStartDate = $this->parseDateTime($blockData);
                break;
            case 'cal_enddate': $this->calendarEndDate = $this->parseDateTime($blockData);
                break;
            case 'cc_cal_id': $this->cc_cal_id = intval($blockData);
                break;
            case 'bezeichnung': $this->title = $blockData;
                break;
            case 'special': $this->moreInfos = $blockData;
                break;
            case 'category_id': $this->calendarID = intval($blockData);
                break;
            case 'repeat_id': $this->repeatID = intval($blockData);
                break;
            case 'repeat_until': $this->repeatUntil = new DateTime($blockData);
                break;
            case 'repeat_frequence': $this->repeatFrequence = intval($blockData);
                break;
            case 'repeat_option_id': $this->repeatOptionID = intval($blockData);
                break;
            case 'intern_yn': $this->isInternal = $blockData == '1';
                break;
            case 'notizen': $this->remarks = $blockData;
                break;
            case 'ort': $this->location = $blockData;
                break;
            case 'link': $this->link = $blockData;
                break;
            case 'datediff': $this->dateDiff = intval($blockData);
                break;
            case 'agenda': $this->isAgenda= $blockData == '1';
                break;
            case 'admin' : $this->adminIDS= $this->parseAdminIDS($blockData);
                break;
            case 'bookings':
                $bookings = [];
                $bookingData = $blockData["bookings"];
                foreach ($bookingData as $b) {
                    array_push($bookings, new Booking($b));
                }
                $this->bookings = $bookings;
                break;
            case 'services': 
                $services = [];
                foreach ($blockData as $s) {
                    array_push($services, new Serviceentry($s));
                }
                $this->serviceEntries = $services;
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

}
