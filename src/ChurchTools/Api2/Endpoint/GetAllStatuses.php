<?php

namespace ChurchTools\Api2\Endpoint;

class GetAllStatuses extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/statuses';
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
     * @throws \ChurchTools\Api2\Exception\GetAllStatusesUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllStatusesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\StatusesGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\StatusesGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllStatusesUnauthorizedException();
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllStatusesForbiddenException();
        }
    }
}