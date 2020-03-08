<?php

namespace ChurchTools\Api2\Endpoint;

class GetAllGroupTypeRoles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/masterdata/person/roles';
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
     * @throws \ChurchTools\Api2\Exception\GetAllGroupTypeRolesUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllGroupTypeRolesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\MasterdataPersonRolesGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\MasterdataPersonRolesGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllGroupTypeRolesUnauthorizedException();
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllGroupTypeRolesForbiddenException();
        }
    }
}
