<?php

namespace ChurchTools\Api2\Endpoint;

class DeletePersonSetting extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    protected $module;
    protected $attribute;
    /**
     * Deleting settings is sometimes useful or necessary. This endpoint can be used to delete one specific setting.
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
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{module}', '{attribute}'), array($this->id, $this->module, $this->attribute), '/persons/{id}/settings/{module}/{attribute}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\DeletePersonSettingForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\DeletePersonSettingForbiddenException();
        }
    }
}