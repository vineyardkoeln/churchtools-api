<?php
declare(strict_types=1);

namespace ChurchTools\Api;

use ChurchTools\Api\Exception\ChurchToolsApiException;
use DateTime;

/**
 * Description of CTObject
 *
 * @author andre
 */
abstract class CTObject {

    private $rawDataBlocks;
    
    public function __construct(array $rawData, $hasDataBlock= true) {
        if ($hasDataBlock)
        {
            if (array_key_exists("data", $rawData))
            {
                foreach ($rawData["data"] as $key => $dataBlock) {
                    $this->handleDataBlock( $key, $dataBlock);
                }
            }
            else
            {
                var_dump($rawData);
                throw new ChurchToolsApiException("Missing data block in rawData");
            }
        }
        else
        {
            foreach ($rawData as $key => $dataBlock) {
                $this->handleDataBlock( $key, $dataBlock);
            }
        }
    }
    
    protected function handleDataBlock($blockName, $blockData)
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
     * 
     * @param type $stringData
     */
    protected function parseDateTime($stringData) 
    {
        if ($stringData != null && strlen(trim($stringData)) > 0)
        {
            return new DateTime($stringData);
        }
        else
        {
            return null;
        }
    }
    
    protected function parseAdminIDS($stringData)
    {
        if ($stringData != null && strlen(trim($stringData)) > 0)
        {
            $retVal= [];
            $adminIDS= explode(',', $stringData);
            foreach ($adminIDS as $aID)
            {
                array_push($retVal, intval($aID));
            }
            return $retVal;
        }
        else
        {
            return null;
        }
    }
}
