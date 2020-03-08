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

class StatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\Status';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Status';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\Status();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'shorty')) {
            $object->setShorty($data->{'shorty'});
        }
        if (property_exists($data, 'isMember')) {
            $object->setIsMember($data->{'isMember'});
        }
        if (property_exists($data, 'isSearchable')) {
            $object->setIsSearchable($data->{'isSearchable'});
        }
        if (property_exists($data, 'sortKey')) {
            $object->setSortKey($data->{'sortKey'});
        }
        if (property_exists($data, 'securityLevelId')) {
            $object->setSecurityLevelId($data->{'securityLevelId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'name'} = $object->getName();
        $data->{'shorty'} = $object->getShorty();
        $data->{'isMember'} = $object->getIsMember();
        $data->{'isSearchable'} = $object->getIsSearchable();
        $data->{'sortKey'} = $object->getSortKey();
        $data->{'securityLevelId'} = $object->getSecurityLevelId();
        return $data;
    }
}
