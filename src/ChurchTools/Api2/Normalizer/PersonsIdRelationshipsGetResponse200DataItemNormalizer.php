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

class PersonsIdRelationshipsGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\PersonsIdRelationshipsGetResponse200DataItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\PersonsIdRelationshipsGetResponse200DataItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\PersonsIdRelationshipsGetResponse200DataItem();
        if (property_exists($data, 'relationshipName')) {
            $object->setRelationshipName($data->{'relationshipName'});
        }
        if (property_exists($data, 'degreeOfRelationship')) {
            $object->setDegreeOfRelationship($data->{'degreeOfRelationship'});
        }
        if (property_exists($data, 'relative')) {
            $object->setRelative($data->{'relative'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'relationshipName'} = $object->getRelationshipName();
        $data->{'degreeOfRelationship'} = $object->getDegreeOfRelationship();
        $data->{'relative'} = $object->getRelative();
        return $data;
    }
}
