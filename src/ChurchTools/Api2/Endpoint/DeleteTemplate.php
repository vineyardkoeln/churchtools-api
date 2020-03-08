<?php

namespace ChurchTools\Api2\Endpoint;

class DeleteTemplate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $templateId;
    /**
     *
     *
     * @param int $templateId ID of appointment template
     */
    public function __construct(int $templateId)
    {
        $this->templateId = $templateId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{templateId}'), array($this->templateId), '/calendars/appointments/templates/{templateId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\DeleteTemplateForbiddenException
     * @throws \ChurchTools\Api2\Exception\DeleteTemplateNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\DeleteTemplateForbiddenException();
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\DeleteTemplateNotFoundException();
        }
    }
}
