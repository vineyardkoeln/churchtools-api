<?php

namespace ChurchTools\Api2\Endpoint;

class UpdateTemplate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $templateId;
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     * @param \stdClass $requestBody 
     */
    public function __construct(int $templateId, \stdClass $requestBody)
    {
        $this->templateId = $templateId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{templateId}'), array($this->templateId), '/calendars/appointments/templates/{templateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
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
     * @throws \ChurchTools\Api2\Exception\UpdateTemplateForbiddenException
     * @throws \ChurchTools\Api2\Exception\UpdateTemplateNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesTemplateIdPutResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesTemplateIdPutResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\UpdateTemplateForbiddenException();
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\UpdateTemplateNotFoundException();
        }
    }
}