<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\Exception\ChurchToolsApiException;
use DateTime;

/**
 * Base class for objects returned by the API
 * It handles common mapping of arrays to objects, and also conversion/mapping
 * of different type conversion and unpacking of multiple datas in one field
 * (Admins of a resource/calendar for example)
 *
 * All unknown/unhandled data blocks are put into the $rawDataBlocks, so we
 * can still access them in the array[] mode.
 * This is helpfull, since CT can be expanded/configured and not all cases
 * can be convered in this library.
 *
 * @author André Schild
 */
abstract class CTObject
{
    private $rawDataBlocks; // Contains all data blocks we did not know how to parse

    /**
     * Parses the rewData arrays and constructs the object tree as far as possible
     * 
     * @param array $rawData        Raw array data as received from the server
     * @param bool $hasDataBlock    Is the data located in the ["data"] array element, or can be access directly, default true
     *
     * @throws ChurchToolsApiException when no data block is found, but one should be present
     */
    public function __construct(array $rawData, bool $hasDataBlock = true)
    {
        if ($hasDataBlock) {
            if (array_key_exists("data", $rawData)) {
                foreach ($rawData["data"] as $key => $dataBlock) {
                    $this->handleDataBlock($key, $dataBlock);
                }
            } else {
                var_dump($rawData);
                throw new ChurchToolsApiException("Missing data block in rawData");
            }
        } else {
            foreach ($rawData as $key => $dataBlock) {
                $this->handleDataBlock($key, $dataBlock);
            }
        }
    }

    /**
     * This method handles the data block with the $blockName
     * Usually the classes need to at least override this method to do anything usefull
     *
     * If a class does not wish to handle this specifical $blockName, then
     * it should call the super::handleDataBlock method, which will the put
     * the block in the $rawDataBlocks
     *
     * @param $blockName
     * @param array|string $blockData
     */
    protected function handleDataBlock($blockName, $blockData): void
    {
        $this->rawDataBlocks[$blockName] = $blockData;
    }

    /**
     * 
     * @return array all unparsed data blocks
     */
    public function getUnparsedDataBlocks(): array
    {
        return array_keys($this->rawDataBlocks);
    }

    /**
     * 
     * @param string $blockName name of block to return
     * @return array containing the raw data as returned from the api call
     */
    public function getUnparsedDataBlock(string $blockName): array
    {
        return $this->rawDataBlocks[$blockName];
    }

    /**
     * Parse and convert a timestamp returned from the CT server into a \DateTime object
     * 
     * @param string|null $stringData date+time to be parsed into a \DateTime object
     * @return \DateTime|null date+time of entry, or null when empty
     */
    protected function parseDateTime(?string $stringData): ?DateTime
    {
        if ($stringData != null && strlen(trim($stringData)) > 0) {
            return new DateTime($stringData);
        } else {
            return null;
        }
    }

    /**
     * Check if this is a full day event
     * Since we don't receive a flag to detect full day events, we need to check if
     * both start+end times are 00:00:00, then it's a full day event
     * 
     * @param DateTime $startDateTime
     * @param DateTime $endDateTime
     * @return boolean true when it's a full day event
     */
    protected function isFullDayEvent(DateTime $startDateTime, DateTime $endDateTime): bool {
        return $startDateTime->format("H:i:s") == "00:00:00" && $endDateTime->format("H:i:s") == "00:00:00";
    }
    
    /**
     * Set the end time of the event to the end of day.
     * Is used to expand the end time of full day events to 23:59:59 of the last day
     * 
     * @param DateTime $endDateTime
     * @return boolean true when it's a full day event
     */
    protected function makeFullDayEvent(DateTime $endDateTime): DateTime {
        return $endDateTime->setTime(23, 59, 59);
    }
    
    /**
     * The CT api sometimes returns the list of adminusers as a comma separated
     * string. For example "1, 23, 33"
     *
     * @param string|null $stringData input value as received from CT
     * @return array|null array with int values for all elements
     */
    protected function parseAdminIDS(?string $stringData): ?array
    {
        if ($stringData != null && strlen(trim($stringData)) > 0) {
            $retVal   = [];
            $adminIDS = explode(',', $stringData);
            foreach ($adminIDS as $aID) {
                array_push($retVal, intval($aID));
            }
            return $retVal;
        } else {
            return null;
        }
    }
}