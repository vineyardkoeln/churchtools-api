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

class AgendasSendPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendasSendPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendasSendPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\AgendasSendPostBody();
        if (property_exists($data, 'eventIds')) {
            $values = array();
            foreach ($data->{'eventIds'} as $value) {
                $values[] = $value;
            }
            $object->setEventIds($values);
        }
        if (property_exists($data, 'recipients')) {
            $values_1 = array();
            foreach ($data->{'recipients'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRecipients($values_1);
        }
        if (property_exists($data, 'sendCopyToMe')) {
            $object->setSendCopyToMe($data->{'sendCopyToMe'});
        }
        if (property_exists($data, 'subject')) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'body')) {
            $object->setBody($data->{'body'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $values = array();
        foreach ($object->getEventIds() as $value) {
            $values[] = $value;
        }
        $data->{'eventIds'} = $values;
        $values_1 = array();
        foreach ($object->getRecipients() as $value_1) {
            $values_1[] = $value_1;
        }
        $data->{'recipients'} = $values_1;
        $data->{'sendCopyToMe'} = $object->getSendCopyToMe();
        $data->{'subject'} = $object->getSubject();
        $data->{'body'} = $object->getBody();
        return $data;
    }
}
