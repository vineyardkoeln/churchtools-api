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
class EventEventServicesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\EventEventServicesItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\EventEventServicesItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\EventEventServicesItem();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'person')) {
            $object->setPerson($data->{'person'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'serviceId')) {
            $object->setServiceId($data->{'serviceId'});
        }
        if (property_exists($data, 'agreed')) {
            $object->setAgreed($data->{'agreed'});
        }
        if (property_exists($data, 'isValid')) {
            $object->setIsValid($data->{'isValid'});
        }
        if (property_exists($data, 'requestedDate')) {
            $object->setRequestedDate($data->{'requestedDate'});
        }
        if (property_exists($data, 'requesterPerson')) {
            $object->setRequesterPerson($data->{'requesterPerson'});
        }
        if (property_exists($data, 'comment')) {
            $object->setComment($data->{'comment'});
        }
        if (property_exists($data, 'counter')) {
            $object->setCounter($data->{'counter'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'person'} = $object->getPerson();
        $data->{'name'} = $object->getName();
        $data->{'serviceId'} = $object->getServiceId();
        $data->{'agreed'} = $object->getAgreed();
        $data->{'isValid'} = $object->getIsValid();
        $data->{'requestedDate'} = $object->getRequestedDate();
        $data->{'requesterPerson'} = $object->getRequesterPerson();
        $data->{'comment'} = $object->getComment();
        $data->{'counter'} = $object->getCounter();
        return $data;
    }
}