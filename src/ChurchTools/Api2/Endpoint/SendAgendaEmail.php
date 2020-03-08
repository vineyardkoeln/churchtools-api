<?php

namespace ChurchTools\Api2\Endpoint;

class SendAgendaEmail extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.
     *
     * @param \ChurchTools\Api2\Model\AgendasSendPostBody $requestBody
     */
    public function __construct(\ChurchTools\Api2\Model\AgendasSendPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/agendas/send';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\AgendasSendPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\SendAgendaEmailBadRequestException
     * @throws \ChurchTools\Api2\Exception\SendAgendaEmailForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\AgendasSendPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \ChurchTools\Api2\Exception\SendAgendaEmailBadRequestException();
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\SendAgendaEmailForbiddenException();
        }
    }
}
