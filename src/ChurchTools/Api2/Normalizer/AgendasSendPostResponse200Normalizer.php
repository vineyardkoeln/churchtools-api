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
class AgendasSendPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\AgendasSendPostResponse200();
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
            $object->setArgs($this->denormalizer->denormalize($data->{'args'}, 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200Args', 'json', $context));
        }
        if (property_exists($data, 'errors')) {
            $values = array();
            foreach ($data->{'errors'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\AgendasSendPostResponse200ErrorsItem', 'json', $context);
            }
            $object->setErrors($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'message'} = $object->getMessage();
        $data->{'translatedMessage'} = $object->getTranslatedMessage();
        $data->{'messageKey'} = $object->getMessageKey();
        $data->{'args'} = $this->normalizer->normalize($object->getArgs(), 'json', $context);
        $values = array();
        foreach ($object->getErrors() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data->{'errors'} = $values;
        return $data;
    }
}