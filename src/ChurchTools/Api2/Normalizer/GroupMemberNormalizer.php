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

class GroupMemberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupMember';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupMember';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\GroupMember();
        if (property_exists($data, 'personId')) {
            $object->setPersonId($data->{'personId'});
        }
        if (property_exists($data, 'roleId')) {
            $object->setRoleId($data->{'roleId'});
        }
        if (property_exists($data, 'comment')) {
            $object->setComment($data->{'comment'});
        }
        if (property_exists($data, 'memberStartDate')) {
            $object->setMemberStartDate($data->{'memberStartDate'});
        }
        if (property_exists($data, 'memberEndDate')) {
            $object->setMemberEndDate($data->{'memberEndDate'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'personId'} = $object->getPersonId();
        $data->{'roleId'} = $object->getRoleId();
        $data->{'comment'} = $object->getComment();
        $data->{'memberStartDate'} = $object->getMemberStartDate();
        if (null !== $object->getMemberEndDate()) {
            $data->{'memberEndDate'} = $object->getMemberEndDate();
        }
        return $data;
    }
}
