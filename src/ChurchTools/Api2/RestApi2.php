<?php

namespace ChurchTools\Api2;

/**
 * Wrapper for the Churchtools new (2019) REST Api
 * The classes are generated with the jane-http framework, providing
 * all needed wrappers / serialisers as defined in the openapi definition
 * of your CT instance
 * 
 * Before the first use of the library, you need to generate these files,
 * via the helper classes in /ChurchTools/Tools/Api2Helper class
 * 
 * When you upgrade your CT instance or add new fields to the system, you will
 * also need to re-generate the files
 *
 * @author andre
 */
class RestApi2 extends Client {

    private $loginToken;

    private function setLoginToken(string $loginToken)
    {
        $this->loginToken= $loginToken;
    }
    
    /**
     * Get login token for current user. This needs to be called only once, e.g. via a command, and can then
     * be stored in the project environment or configuration for re-use with `createWithLoginIdToken`.
     * It is very long-lasting (until revoked?).
     *
     * @param type $serverURL  url in the form https://myct.church.tools
     * @param string $usernameOrEmail
     * @param string $password
     * @return array on success, or null on failure
     * 
     * @see https://api.church.tools/class-CTLoginModule.html#_getUserLoginToken
     */
    private static function getLoginToken(string $serverURL, string $usernameOrEmail, string $password): ?array {
        $data = array('func' => 'getUserLoginToken',
            'email' => $usernameOrEmail,
            'password' => $password);
        $result = RestApi2::sendRequest($serverURL."?q=login/ajax", $data);
        if ($result != null)
        {
            $token = $result->data->token;
            $id = $result->data->id;
            return ["login_token" => $token, "userID" => $id];
        }
        else
        {
            return null;
        }
    }

    /**
     * Send a simple request to retrieve the login token
     * 
     * @param string $serverURL  url in the form https://myct.church.tools
     * @param array $data
     * @return object on success, or null on failure
     */
    private static function sendRequest(string $serverURL, array $data)  {
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($serverURL, false, $context);
        $obj = json_decode($result);
        if ($obj->status != 'success') {
            return null;
        }
        return $obj;
    }

    /**
     * 
     * @param string $serverURL  url in the form https://myct.church.tools
     * @param string $userName
     * @param string $password
     * 
     * @return \ChurchTools\Api2\RestApi2
     */
    public static function createClientWithUsernamePassword(string $serverURL, string $userName, string $password) : ?RestApi2 {
        $loginToken= RestApi2::getLoginToken($serverURL, $userName, $password);
        if ($loginToken != null)
        {
            return RestApi2::createClientWithLoginToken($serverURL, $loginToken["login_token"]);
        }
        else
        {
            return null;
        }
    }
    
    /**
     * 
     * @param string $serverURL  url in the form https://myct.church.tools
     * @param string logintoken for authentication
     * 
     * @return \ChurchTools\Api2\RestApi2
     */
    public static function createClientWithLoginToken(string $serverURL, $loginToken) : RestApi2 {
        $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri($serverURL."/api/");

        $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
        $pluginClient = new \Http\Client\Common\PluginClient($httpClient, [
            new \Http\Client\Common\Plugin\AddHostPlugin($uri),
            new \Http\Client\Common\Plugin\AddPathPlugin($uri),
            new \ChurchTools\Tools\QueryAuthPlugin($loginToken)
        ]);
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(
                                \ChurchTools\Api2\Normalizer\NormalizerFactory::create(), 
                                array(
                                    new \Symfony\Component\Serializer\Encoder\JsonEncoder(
                                            new \Symfony\Component\Serializer\Encoder\JsonEncode(), 
                                            //new \Symfony\Component\Serializer\Encoder\JsonDecode()
                                            new \ChurchTools\Tools\Api2JsonDecoder()
                                        )
                                    )
                        );
        $retVal= new static($pluginClient, $requestFactory, $serializer, $streamFactory);
        $retVal->setLoginToken($loginToken);
        return $retVal;
    }
}
