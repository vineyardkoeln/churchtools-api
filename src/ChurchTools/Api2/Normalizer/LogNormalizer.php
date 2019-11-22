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
class LogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\Log';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Log';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\Log();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'level')) {
            $object->setLevel($data->{'level'});
        }
        if (property_exists($data, 'date')) {
            $object->setDate(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'date'}));
        }
        if (property_exists($data, 'personId')) {
            $object->setPersonId($data->{'personId'});
        }
        if (property_exists($data, 'simultePersonId')) {
            $object->setSimultePersonId($data->{'simultePersonId'});
        }
        if (property_exists($data, 'domainType')) {
            $object->setDomainType($data->{'domainType'});
        }
        if (property_exists($data, 'domainId')) {
            $object->setDomainId($data->{'domainId'});
        }
        if (property_exists($data, 'message')) {
            $object->setMessage($data->{'message'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'level'} = $object->getLevel();
        $data->{'date'} = $object->getDate()->format("Y-m-d\TH:i:sP");
        $data->{'personId'} = $object->getPersonId();
        if (null !== $object->getSimultePersonId()) {
            $data->{'simultePersonId'} = $object->getSimultePersonId();
        }
        $data->{'domainType'} = $object->getDomainType();
        $data->{'domainId'} = $object->getDomainId();
        $data->{'message'} = $object->getMessage();
        return $data;
    }
}