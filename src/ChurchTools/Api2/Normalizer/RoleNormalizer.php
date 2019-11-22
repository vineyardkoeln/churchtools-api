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
class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\Role';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Role';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\Role();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'groupTypeId')) {
            $object->setGroupTypeId($data->{'groupTypeId'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'shorty')) {
            $object->setShorty($data->{'shorty'});
        }
        if (property_exists($data, 'sortKey')) {
            $object->setSortKey($data->{'sortKey'});
        }
        if (property_exists($data, 'toDelete')) {
            $object->setToDelete($data->{'toDelete'});
        }
        if (property_exists($data, 'hasRequested')) {
            $object->setHasRequested($data->{'hasRequested'});
        }
        if (property_exists($data, 'isLeader')) {
            $object->setIsLeader($data->{'isLeader'});
        }
        if (property_exists($data, 'isDefault')) {
            $object->setIsDefault($data->{'isDefault'});
        }
        if (property_exists($data, 'isHidden')) {
            $object->setIsHidden($data->{'isHidden'});
        }
        if (property_exists($data, 'growPathId')) {
            $object->setGrowPathId($data->{'growPathId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'groupTypeId'} = $object->getGroupTypeId();
        $data->{'name'} = $object->getName();
        $data->{'shorty'} = $object->getShorty();
        $data->{'sortKey'} = $object->getSortKey();
        $data->{'toDelete'} = $object->getToDelete();
        $data->{'hasRequested'} = $object->getHasRequested();
        $data->{'isLeader'} = $object->getIsLeader();
        $data->{'isDefault'} = $object->getIsDefault();
        $data->{'isHidden'} = $object->getIsHidden();
        if (null !== $object->getGrowPathId()) {
            $data->{'growPathId'} = $object->getGrowPathId();
        }
        return $data;
    }
}