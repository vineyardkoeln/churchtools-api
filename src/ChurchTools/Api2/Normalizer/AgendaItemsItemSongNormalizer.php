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
class AgendaItemsItemSongNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\AgendaItemsItemSong';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\AgendaItemsItemSong';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\AgendaItemsItemSong();
        if (property_exists($data, 'songId')) {
            $object->setSongId($data->{'songId'});
        }
        if (property_exists($data, 'arrangementId')) {
            $object->setArrangementId($data->{'arrangementId'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'arrangement')) {
            $object->setArrangement($data->{'arrangement'});
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($data->{'category'});
        }
        if (property_exists($data, 'key')) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'bpm')) {
            $object->setBpm($data->{'bpm'});
        }
        if (property_exists($data, 'defaultArrangement')) {
            $object->setDefaultArrangement($data->{'defaultArrangement'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'songId'} = $object->getSongId();
        $data->{'arrangementId'} = $object->getArrangementId();
        $data->{'title'} = $object->getTitle();
        $data->{'arrangement'} = $object->getArrangement();
        $data->{'category'} = $object->getCategory();
        $data->{'key'} = $object->getKey();
        $data->{'bpm'} = $object->getBpm();
        $data->{'defaultArrangement'} = $object->getDefaultArrangement();
        return $data;
    }
}