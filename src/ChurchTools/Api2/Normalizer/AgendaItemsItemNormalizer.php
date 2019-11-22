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
class AgendaItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendaItemsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendaItemsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\AgendaItemsItem();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'position')) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'start')) {
            $object->setStart(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'start'}));
        }
        if (property_exists($data, 'isBeforeEvent')) {
            $object->setIsBeforeEvent($data->{'isBeforeEvent'});
        }
        if (property_exists($data, 'responsible')) {
            $object->setResponsible($this->denormalizer->denormalize($data->{'responsible'}, 'ChurchTools\\Api2\\Model\\AgendaItemsItemResponsible', 'json', $context));
        }
        if (property_exists($data, 'serviceGroupNotes')) {
            $values = array();
            foreach ($data->{'serviceGroupNotes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChurchTools\\Api2\\Model\\AgendaItemsItemServiceGroupNotesItem', 'json', $context);
            }
            $object->setServiceGroupNotes($values);
        }
        if (property_exists($data, 'song')) {
            $object->setSong($this->denormalizer->denormalize($data->{'song'}, 'ChurchTools\\Api2\\Model\\AgendaItemsItemSong', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'position'} = $object->getPosition();
        $data->{'type'} = $object->getType();
        $data->{'title'} = $object->getTitle();
        $data->{'note'} = $object->getNote();
        $data->{'duration'} = $object->getDuration();
        $data->{'start'} = $object->getStart()->format("Y-m-d\TH:i:sP");
        $data->{'isBeforeEvent'} = $object->getIsBeforeEvent();
        $data->{'responsible'} = $this->normalizer->normalize($object->getResponsible(), 'json', $context);
        $values = array();
        foreach ($object->getServiceGroupNotes() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data->{'serviceGroupNotes'} = $values;
        $data->{'song'} = $this->normalizer->normalize($object->getSong(), 'json', $context);
        return $data;
    }
}