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

class ServiceGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\ServiceGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\ServiceGroup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\ServiceGroup();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'sortKey')) {
            $object->setSortKey($data->{'sortKey'});
        }
        if (property_exists($data, 'viewAll')) {
            $object->setViewAll($data->{'viewAll'});
        }
        if (property_exists($data, 'campusId')) {
            $object->setCampusId($data->{'campusId'});
        }
        if (property_exists($data, 'onlyVisibleInCampusFilter')) {
            $object->setOnlyVisibleInCampusFilter($data->{'onlyVisibleInCampusFilter'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'name'} = $object->getName();
        $data->{'sortKey'} = $object->getSortKey();
        $data->{'viewAll'} = $object->getViewAll();
        if (null !== $object->getCampusId()) {
            $data->{'campusId'} = $object->getCampusId();
        }
        $data->{'onlyVisibleInCampusFilter'} = $object->getOnlyVisibleInCampusFilter();
        return $data;
    }
}
