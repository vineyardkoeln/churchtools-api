<?php

namespace ChurchTools\Api2\Endpoint;

class UpdatePersonSetting extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    protected $module;
    protected $attribute;
    /**
     * <strong>Important:</strong> Not all settings are supported to update over this endpoint. The API will tell you if you are allowed to update a setting.<br>This endpoint can be used to update a value of an existing setting or create it if it does not exists, yet.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param string $attribute Attribute name of setting
     */
    public function __construct(string $id, string $module, string $attribute)
    {
        $this->id = $id;
        $this->module = $module;
        $this->attribute = $attribute;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{module}', '{attribute}'), array($this->id, $this->module, $this->attribute), '/persons/{id}/settings/{module}/{attribute}');
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
     * @throws \ChurchTools\Api2\Exception\UpdatePersonSettingForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleAttributePutResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdSettingsModuleAttributePutResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\UpdatePersonSettingForbiddenException();
        }
    }
}
