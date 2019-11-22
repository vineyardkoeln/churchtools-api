<?php

namespace ChurchTools\Api2\Endpoint;

class GetAllPersons extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * This endpoint gives you all the people you are allowed to see. Each person object holds only those fields you may see. You will get at least an empty array even if you cannot see any person.<br><br> We distinguish between `date` and `date-time` fields. `date` is a ISO representation like `YYYY-MM-DD`. On the other hand, for `date-time` we return and accept a <a href="https://www.w3.org/TR/NOTE-datetime">W3C Zulu date string</a>. Example `1994-11-05T08:15:30Z`
     *
     * @param array $queryParameters {
     *     @var array $ids Array of person ids
     *     @var array $status_ids Filter by status id
     *     @var array $campus_ids Filter by campus id
     *     @var string $birthday_before Filter by birthdays before that date (Format: YYYY-MM-DD)
     *     @var string $birthday_after Filter by birthdays after that date (Format: YYYY-MM-DD)
     *     @var bool $is_archived Show only archived or not archived people
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
        return '/persons';
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
        $optionsResolver->setDefined(array('ids', 'status_ids', 'campus_ids', 'birthday_before', 'birthday_after', 'is_archived', 'page', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'limit' => 10));
        $optionsResolver->setAllowedTypes('ids', array('array'));
        $optionsResolver->setAllowedTypes('status_ids', array('array'));
        $optionsResolver->setAllowedTypes('campus_ids', array('array'));
        $optionsResolver->setAllowedTypes('birthday_before', array('string'));
        $optionsResolver->setAllowedTypes('birthday_after', array('string'));
        $optionsResolver->setAllowedTypes('is_archived', array('bool'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetAllPersonsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllPersonsForbiddenException();
        }
    }
}