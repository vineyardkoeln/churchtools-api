<?php

namespace ChurchTools\Api2\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\File';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\File';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\File();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'filename')) {
            $object->setFilename($data->{'filename'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'relativeUrl')) {
            $object->setRelativeUrl($data->{'relativeUrl'});
        }
        if (property_exists($data, 'size')) {
            $object->setSize($data->{'size'});
        }
        if (property_exists($data, 'domainType')) {
            $object->setDomainType($data->{'domainType'});
        }
        if (property_exists($data, 'domainIdentifier')) {
            $object->setDomainIdentifier($data->{'domainIdentifier'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'name'} = $object->getName();
        $data->{'filename'} = $object->getFilename();
        $data->{'url'} = $object->getUrl();
        $data->{'relativeUrl'} = $object->getRelativeUrl();
        $data->{'size'} = $object->getSize();
        $data->{'domainType'} = $object->getDomainType();
        $data->{'domainIdentifier'} = $object->getDomainIdentifier();
        return $data;
    }
}
