<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
     * Each person as a unique numeric ID in ChurchTools. This ID is used all over in ChurchTools and in the API.
     *
     * @param string $id ID or GUID of person
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/persons/{id}');
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
     * @throws \ChurchTools\Api2\Exception\GetPersonByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetPersonByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonByIdNotFoundException();
        }
    }
}