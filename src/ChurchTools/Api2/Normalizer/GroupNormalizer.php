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

class GroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\Group';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Group';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\Group();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'securityLevelForGroup')) {
            $object->setSecurityLevelForGroup($data->{'securityLevelForGroup'});
        }
        if (property_exists($data, 'information')) {
            $object->setInformation($this->denormalizer->denormalize($data->{'information'}, 'ChurchTools\\Api2\\Model\\GroupInformation', 'json', $context));
        }
        if (property_exists($data, 'settings')) {
            $object->setSettings($this->denormalizer->denormalize($data->{'settings'}, 'ChurchTools\\Api2\\Model\\GroupSettings', 'json', $context));
        }
        if (property_exists($data, 'followUp')) {
            $object->setFollowUp($this->denormalizer->denormalize($data->{'followUp'}, 'ChurchTools\\Api2\\Model\\GroupFollowUp', 'json', $context));
        }
        if (property_exists($data, 'roles')) {
            $values = array();
            foreach ($data->{'roles'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\GroupRolesItem', 'json', $context);
            }
            $object->setRoles($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'name'} = $object->getName();
        $data->{'securityLevelForGroup'} = $object->getSecurityLevelForGroup();
        $data->{'information'} = $this->normalizer->normalize($object->getInformation(), 'json', $context);
        $data->{'settings'} = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        $data->{'followUp'} = $this->normalizer->normalize($object->getFollowUp(), 'json', $context);
        $values = array();
        foreach ($object->getRoles() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data->{'roles'} = $values;
        return $data;
    }
}
