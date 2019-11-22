<?php

namespace ChurchTools\Api2\Endpoint;

class CreatePerson extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Endpoint to save a new person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. If the request fails because a duplicate is found (person with same name) use the `force` flag to create this person even if a duplicate is found.
     *
     * @param \ChurchTools\Api2\Model\PersonsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $force Force the action, which would otherwise fail.
     * }
     */
    public function __construct(\ChurchTools\Api2\Model\PersonsPostBody $requestBody, array $queryParameters = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/persons';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\PersonsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('force'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('force', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\CreatePersonBadRequestException
     * @throws \ChurchTools\Api2\Exception\CreatePersonPaymentRequiredException
     * @throws \ChurchTools\Api2\Exception\CreatePersonForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsPostResponse200', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \ChurchTools\Api2\Exception\CreatePersonBadRequestException($serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsPostResponse400', 'json'));
        }
        if (401 === $status) {
        }
        if (402 === $status) {
            throw new \ChurchTools\Api2\Exception\CreatePersonPaymentRequiredException();
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\CreatePersonForbiddenException();
        }
    }
}