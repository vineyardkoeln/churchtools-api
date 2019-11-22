<?php

namespace ChurchTools\Api2\Endpoint;

class GetTags extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Returns all tags of type persons or songs
     *
     * @param array $queryParameters {
     *     @var string $type Type of tags
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/tags';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('type'));
        $optionsResolver->setRequired(array('type'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('type', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetTagsForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetTagsNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\Tag[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\Tag[]', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetTagsForbiddenException();
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetTagsNotFoundException();
        }
    }
}