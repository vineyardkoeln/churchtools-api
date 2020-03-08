<?php

namespace ChurchTools\Api2\Endpoint;

class UploadFiles extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $domainType;
    protected $domainIdentifier;
    /**
     *
     *
     * @param string $domainType The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
     * @param string $domainIdentifier the domain identifier
     * @param \ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody $requestBody
     */
    public function __construct(string $domainType, string $domainIdentifier, \ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody $requestBody)
    {
        $this->domainType = $domainType;
        $this->domainIdentifier = $domainIdentifier;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{domainType}', '{domainIdentifier}'), array($this->domainType, $this->domainIdentifier), '/files/{domainType}/{domainIdentifier}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $bodyBuilder->addResource($key, $value);
            }
            return array(array('Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""'))), $bodyBuilder->build());
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
     * @throws \ChurchTools\Api2\Exception\UploadFilesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\FilesDomainTypeDomainIdentifierPostResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\UploadFilesForbiddenException();
        }
    }
}
