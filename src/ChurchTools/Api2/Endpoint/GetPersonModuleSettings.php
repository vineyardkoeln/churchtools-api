<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonModuleSettings extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    protected $module;
    /**
     * Person settings are grouped per module. This endpoint returns an array of all user settings for a person of this module.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     */
    public function __construct(string $id, string $module)
    {
        $this->id = $id;
        $this->module = $module;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{module}'), array($this->id, $this->module), '/persons/{id}/settings/{module}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetPersonModuleSettingsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdSettingsModuleGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonModuleSettingsForbiddenException();
        }
    }
}