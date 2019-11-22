<?php

namespace ChurchTools\Api2\Endpoint;

class GetMasterdataPersonRoleByRoleId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $roleId;
    /**
     * 
     *
     * @param int $roleId ID of group type role
     */
    public function __construct(int $roleId)
    {
        $this->roleId = $roleId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{roleId}'), array($this->roleId), '/masterdata/person/roles/{roleId}');
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
     * @throws \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\MasterdataPersonRolesRoleIdGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\MasterdataPersonRolesRoleIdGetResponse200', 'json');
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdForbiddenException();
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdNotFoundException();
        }
    }
}