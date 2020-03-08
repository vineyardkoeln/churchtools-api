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

class AgendasSendPostResponse200ErrorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\AgendasSendPostResponse200ErrorsItem();
        if (property_exists($data, 'titel')) {
            $object->setTitel($data->{'titel'});
        }
        if (property_exists($data, 'domainType')) {
            $object->setDomainType($data->{'domainType'});
        }
        if (property_exists($data, 'domainIdentifier')) {
            $object->setDomainIdentifier($data->{'domainIdentifier'});
        }
        if (property_exists($data, 'apiUrl')) {
            $object->setApiUrl($data->{'apiUrl'});
        }
        if (property_exists($data, 'frontendUrl')) {
            $object->setFrontendUrl($data->{'frontendUrl'});
        }
        if (property_exists($data, 'imageUrl')) {
            $object->setImageUrl($data->{'imageUrl'});
        }
        if (property_exists($data, 'domainAttributes')) {
            $object->setDomainAttributes($this->denormalizer->denormalize($data->{'domainAttributes'}, 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItemDomainAttributes', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'titel'} = $object->getTitel();
        $data->{'domainType'} = $object->getDomainType();
        $data->{'domainIdentifier'} = $object->getDomainIdentifier();
        $data->{'apiUrl'} = $object->getApiUrl();
        $data->{'frontendUrl'} = $object->getFrontendUrl();
        $data->{'imageUrl'} = $object->getImageUrl();
        $data->{'domainAttributes'} = $this->normalizer->normalize($object->getDomainAttributes(), 'json', $context);
        return $data;
    }
}
