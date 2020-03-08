<?php

namespace ChurchTools\Api2\Endpoint;

class GetAgendaForEvent extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $eventId;
    /**
     * Fetch all agenda items.
     *
     * @param int $eventId ID of corresponding event
     */
    public function __construct(int $eventId)
    {
        $this->eventId = $eventId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{eventId}'), array($this->eventId), '/events/{eventId}/agenda');
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
     * @throws \ChurchTools\Api2\Exception\GetAgendaForEventForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\EventsEventIdAgendaGetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\EventsEventIdAgendaGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAgendaForEventForbiddenException();
        }
    }
}
