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

class CalendarsAppointmentsTemplatesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\CalendarsAppointmentsTemplatesPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesPostBody();
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'comment')) {
            $object->setComment($data->{'comment'});
        }
        if (property_exists($data, 'startTime')) {
            $object->setStartTime($data->{'startTime'});
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'allDay')) {
            $object->setAllDay($data->{'allDay'});
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'isInternal')) {
            $object->setIsInternal($data->{'isInternal'});
        }
        if (property_exists($data, 'categoryId')) {
            $object->setCategoryId($data->{'categoryId'});
        }
        if (property_exists($data, 'repeatId')) {
            $object->setRepeatId($data->{'repeatId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'title'} = $object->getTitle();
        $data->{'comment'} = $object->getComment();
        $data->{'startTime'} = $object->getStartTime();
        $data->{'duration'} = $object->getDuration();
        $data->{'allDay'} = $object->getAllDay();
        $data->{'note'} = $object->getNote();
        $data->{'isInternal'} = $object->getIsInternal();
        $data->{'categoryId'} = $object->getCategoryId();
        $data->{'repeatId'} = $object->getRepeatId();
        return $data;
    }
}
