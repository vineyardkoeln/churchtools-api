<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ChurchTools\Tools;

/**
 * Description of Api2Helper
 *
 * @author andre
 */
class Api2Helper
{
    /**
     * Check if the schema classes have been generated
     *
     * @param string $serverURL
     * @return bool
     */
    public static function isClientGenerated() : bool
    {
        return file_exists(__DIR__."/../Api2/Client.php");
    }
    
    /**
     * Generate api classes from openapi file on current server installation
     * We need to do this for each CT installation, since the fields
     * defined in the objects can be adapted on a per-instance level
     *
     * @param string $serverURL URL to your CT server, like:  https://mysite.church.tools
     * @param string $janeBinaryPath can be null, the system trys to autodected
     *
     * @return bool
     */
    public static function generateClient(string $serverURL, ?string $janeBinaryPath = null) : bool
    {
        $isWindows= strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        $configFile= fopen(__DIR__."/.jane", "w");
        fwrite($configFile, "<?php\n");
        fwrite($configFile, "return [\n");
        //fwrite($configFile, "'openapi-file' => '".$serverURL."/system/runtime/swagger/openapi.json',\n");
        fwrite($configFile, "'openapi-file' => 'openapi.yaml',\n");
        //fwrite($configFile, "'root-class' => 'ChurchToolModel',\n");
        fwrite($configFile, "'namespace' => 'ChurchTools\Api2',\n");
        fwrite($configFile, "'directory' => __DIR__ . '/../Api2',\n");
        fwrite($configFile, "'client' => 'psr18',\n");
        fwrite($configFile, "'strict' => 'true',\n");
        fwrite($configFile, "'use-fixer' => 'true',\n");
        

        fwrite($configFile, "];\n");
        fclose($configFile);
        $janeFile= "jane-openapi".($isWindows ? ".bat" : "");
        $janePath= __DIR__."/vendor/bin/".$janeFile;
        if ($janeBinaryPath != null) {
            $janePath= $janeBinaryPath;
        } else {
            $pathParents= "";
            // We look up to 10 parent folders to find the jane binary
            for ($maxParents= 10; $maxParents > 0; $maxParents--) {
                if (file_exists($janePath)) {
                    break;
                } else {
                    $pathParents= "/..".$pathParents;
                    $janePath= __DIR__.$pathParents."/vendor/bin/".$janeFile;
                }
            }
        }
        
        $cmdLine= $janePath." generate --config-file=".__DIR__."/.jane";
        echo "Exec: ".$cmdLine."<br>\n";
        set_time_limit(120); // Retrieval & generation takes more than the default 30 seconds
        exec($cmdLine);
        return false;
    }
}
