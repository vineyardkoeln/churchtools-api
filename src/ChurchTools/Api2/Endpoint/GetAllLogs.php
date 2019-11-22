<?php

namespace ChurchTools\Api2\Endpoint;

class GetAllLogs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * The response is a collection of all log messages you may see and is limited to a specific number of messages. You can use the `page` parameter to browse the list of log messages. The logs are ordered by date.
     *
     * @param array $queryParameters {
     *     @var string $message Filter by text
     *     @var array $levels Filter by log level
     *     @var string $before Filter log messages before that date. (Format: YYYY-MM-DD\Thh:mm:ssZ)
     *     @var string $after Filter log messages after that date. (Format: YYYY-MM-DD\Thh:mm:ssZ)
     *     @var int $person_id Filter by person
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
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
        return '/logs';
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
        $optionsResolver->setDefined(array('message', 'levels', 'before', 'after', 'person_id', 'page', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'limit' => 10));
        $optionsResolver->setAllowedTypes('message', array('string'));
        $optionsResolver->setAllowedTypes('levels', array('array'));
        $optionsResolver->setAllowedTypes('before', array('string'));
        $optionsResolver->setAllowedTypes('after', array('string'));
        $optionsResolver->setAllowedTypes('person_id', array('int'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetAllLogsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\LogsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\LogsGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllLogsForbiddenException();
        }
    }
}