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
class PersonsPostBodyPrivacyPolicyAgreementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\PersonsPostBodyPrivacyPolicyAgreement';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\PersonsPostBodyPrivacyPolicyAgreement';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\PersonsPostBodyPrivacyPolicyAgreement();
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }
        if (property_exists($data, 'typeId')) {
            $object->setTypeId($data->{'typeId'});
        }
        if (property_exists($data, 'whoId')) {
            $object->setWhoId($data->{'whoId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate();
        }
        if (null !== $object->getTypeId()) {
            $data->{'typeId'} = $object->getTypeId();
        }
        if (null !== $object->getWhoId()) {
            $data->{'whoId'} = $object->getWhoId();
        }
        return $data;
    }
}