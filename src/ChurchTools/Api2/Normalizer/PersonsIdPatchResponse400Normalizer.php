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
class PersonsIdPatchResponse400Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\PersonsIdPatchResponse400';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\PersonsIdPatchResponse400';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\PersonsIdPatchResponse400();
        if (property_exists($data, 'message')) {
            $object->setMessage($data->{'message'});
        }
        if (property_exists($data, 'translatedMessage')) {
            $object->setTranslatedMessage($data->{'translatedMessage'});
        }
        if (property_exists($data, 'messageKey')) {
            $object->setMessageKey($data->{'messageKey'});
        }
        if (property_exists($data, 'args')) {
            $values = array();
            foreach ($data->{'args'} as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (property_exists($data, 'errors')) {
            $values_1 = array();
            foreach ($data->{'errors'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setErrors($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'message'} = $object->getMessage();
        $data->{'translatedMessage'} = $object->getTranslatedMessage();
        $data->{'messageKey'} = $object->getMessageKey();
        $values = array();
        foreach ($object->getArgs() as $value) {
            $values[] = $value;
        }
        $data->{'args'} = $values;
        $values_1 = array();
        foreach ($object->getErrors() as $value_1) {
            $values_1[] = $value_1;
        }
        $data->{'errors'} = $values_1;
        return $data;
    }
}