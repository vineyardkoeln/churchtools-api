<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\Calendars;
use ChurchTools\Api\Resources;
use ChurchTools\Api\ResourceTypes;

/**
 * The masterdata contains the global settings of the ct instance, like
 * calendars, services, etc.
 *
 * Currently we only parse the data blocks mentioned below.
 * All other parts can be retrieved as array via the getRawData('nameOfDataBlock')
 *
 * @author André Schild
 */
class MasterData extends CTObject
{
    private $moduleCalendarName;
    private $calendars;
    private $baseURL;
    private $filesURL;
    private $moduleName;
    private $modulesPath;
    private $adminEmail;
    private $userName;
    private $userID;
    private $resources;
    private $allowedResources;
    private $resourceTypes;
    private $repeatingTypes;
    private $bookingStatusTypes;
    private $firstDayInWeek;
    private $serviceGroups;
    private $serviceEntries;
    private $groupTypes;
    private $groups;

    protected function handleDataBlock($blockName, $blockData): void
    {
        switch ($blockName) {
            case 'base_url':
                $this->baseURL     = $blockData;
                break;
            case 'files_url':
                $this->filesURL    = $blockData;
                break;
            case 'modulename':
                $this->moduleName  = $blockData;
                break;
            case 'modulespath':
                $this->modulesPath = $blockData;
                break;
            case 'adminemail':
                $this->adminEmail  = $blockData;
                break;
            case 'user_name':
                $this->userName    = $blockData;
                break;
            case 'userid':
                $this->userID      = intval($blockData);
                break;
            case 'category':
                $this->calendars   = new Calendars($blockData, false);
                break;
            case 'resources':
                $this->resources   = new Resources($blockData, false);
                break;
            case 'resourceTypes':
                $this->resourceTypes   = new ResourceTypes($blockData, false);
                break;
            case 'allowedresources':
                $this->allowedResources=  $blockData;
                break;
            case 'repeat':
                $this->repeatingTypes= new RepeatingTypes($blockData, false);
                break;
            case 'status':
            case 'bookingStatus':
                $this->bookingStatusTypes= new BookingStatusTypes($blockData, false);
                break;
            case 'servicegroup':
                $this->serviceGroups   = new ServiceGroups($blockData, false);
                break;
            case 'service':
                $this->serviceEntries   = new ServiceEntries($blockData, false);
                break;
            case 'churchcal_name':
                $this->moduleCalendarName= $blockData;
                break;
            case 'firstDayInWeek':
                $this->firstDayInWeek= $blockData;
                break;
            case 'groupTypes':
                $this->groupTypes   = new GroupTypes($blockData, false);
                break;
            case 'groups':
                $this->groups   = new Groups($blockData, false);
                break;
//            case 'views':
//                var_dump($blockData);
//                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * All system wide calendars where the user has access
     *
     * @return \ChurchTools\Api\Calendars list calendars
     */
    public function getCalendars(): Calendars
    {
        return $this->calendars;
    }
    
    /**
     * All system wide grouos where the user has access
     *
     * @return \ChurchTools\Api\Groups list groups
     */
    public function getGroups(): groups
    {
        return $this->groups;
    }

    /**
     * All system wide group types where the user has access
     *
     * @return \ChurchTools\Api\GroupTypes list group types
     */
    public function getGroupTypes(): GroupTypes
    {
        return $this->groupTypes;
    }
    
    /**
     * All system wide resources where the user has access
     *
     * @return \ChurchTools\Api\Resources list resources
     */
    public function getResources(): Resources
    {
        return $this->resources;
    }
    
    /**
     * All system wide resource types where the user has access
     *
     * @return \ChurchTools\Api\ResourceTypes list resource types
     */
    public function getResourceTypes(): ResourceTypes
    {
        return $this->resourceTypes;
    }
    
    /**
     * All system wide resource types where the user has access
     *
     * @return \ChurchTools\Api\ResourceTypes list resource types
     */
    public function getServiceGroups(): ServiceGroups
    {
        return $this->serviceGroups;
    }
        
    /**
     * All system wide service where the user has access
     *
     * @return \ChurchTools\Api\ServiceEntries list resource types
     */
    public function getServiceEntries(): ServiceEntries
    {
        return $this->serviceEntries;
    }
           
    public function getCalendarModuleName() : string
    {
        return $this->moduleCalendarName;
    }
    
    public function getFirstDayInWeek()
    {
        return $this->firstDayInWeek;
    }
}
