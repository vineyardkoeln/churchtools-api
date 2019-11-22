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
class FieldsGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\FieldsGetResponse200DataItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\FieldsGetResponse200DataItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\FieldsGetResponse200DataItem();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'key')) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'shorty')) {
            $object->setShorty($data->{'shorty'});
        }
        if (property_exists($data, 'fieldCategoryCode')) {
            $object->setFieldCategoryCode($data->{'fieldCategoryCode'});
        }
        if (property_exists($data, 'fieldTypeCode')) {
            $object->setFieldTypeCode($data->{'fieldTypeCode'});
        }
        if (property_exists($data, 'isActive')) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'isNewPersonField')) {
            $object->setIsNewPersonField($data->{'isNewPersonField'});
        }
        if (property_exists($data, 'lineEnding')) {
            $object->setLineEnding($data->{'lineEnding'});
        }
        if (property_exists($data, 'secLevel')) {
            $object->setSecLevel($data->{'secLevel'});
        }
        if (property_exists($data, 'length')) {
            $object->setLength($data->{'length'});
        }
        if (property_exists($data, 'deleteOnArchive')) {
            $object->setDeleteOnArchive($data->{'deleteOnArchive'});
        }
        if (property_exists($data, 'nullable')) {
            $object->setNullable($data->{'nullable'});
        }
        if (property_exists($data, 'sortKey')) {
            $object->setSortKey($data->{'sortKey'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'key'} = $object->getKey();
        $data->{'name'} = $object->getName();
        $data->{'shorty'} = $object->getShorty();
        $data->{'fieldCategoryCode'} = $object->getFieldCategoryCode();
        $data->{'fieldTypeCode'} = $object->getFieldTypeCode();
        $data->{'isActive'} = $object->getIsActive();
        $data->{'isNewPersonField'} = $object->getIsNewPersonField();
        $data->{'lineEnding'} = $object->getLineEnding();
        $data->{'secLevel'} = $object->getSecLevel();
        $data->{'length'} = $object->getLength();
        $data->{'deleteOnArchive'} = $object->getDeleteOnArchive();
        $data->{'nullable'} = $object->getNullable();
        $data->{'sortKey'} = $object->getSortKey();
        return $data;
    }
}