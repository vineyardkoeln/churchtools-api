<?php

declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\Calendars;

/**
 * The masterdata contains the global settings of the ct instance, like 
 * calendars, services, etc.
 * 
 * Currently we only parse the data blocks mentioned below.
 * All other parts can be retrieved as array via the getRawData('nameOfDataBlock')
 * 
 * category : Calendars
 *
 * @author andre
 */
class MasterData extends CTObject {

    private $calendars;
    private $baseURL;
    private $filesURL;
    private $moduleName;
    private $modulesPath;
    private $adminEmail;
    private $userName;
    private $userID;

    protected function handleDataBlock($blockName, $blockData) {
        switch ($blockName) {
            case 'base_url':
                $this->baseURL= $blockData;
                break;
            case 'files_url':
                $this->filesURL= $blockData;
                break;
            case 'modulename':
                $this->moduleName= $blockData;
                break;
            case 'modulespath':
                $this->modulesPath= $blockData;
                break;
            case 'adminemail':
                $this->adminEmail= $blockData;
                break;
            case 'user_name':
                $this->userName= $blockData;
                break;
            case 'userid':
                $this->userID= intval($blockData);
                break;
            case 'category':
                $this->calendars = new Calendars($blockData, false);
                break;
            default:
                parent::handleDataBlock($blockName, $blockData);
        }
    }

    /**
     * All system wide calendars where the user has access
     * 
     * @return \ChurchTools\Api\Calendars list calendars
     */
    public function getCalendars(): Calendars {
        return $this->calendars;
    }

}
