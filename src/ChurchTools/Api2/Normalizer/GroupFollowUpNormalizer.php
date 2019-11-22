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
class GroupFollowUpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupFollowUp';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupFollowUp';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\GroupFollowUp();
        if (property_exists($data, 'typeId')) {
            $object->setTypeId($data->{'typeId'});
        }
        if (property_exists($data, 'targetTypeId')) {
            $object->setTargetTypeId($data->{'targetTypeId'});
        }
        if (property_exists($data, 'targetObjectId')) {
            $object->setTargetObjectId($data->{'targetObjectId'});
        }
        if (property_exists($data, 'targetGroupMemberStatusId')) {
            $object->setTargetGroupMemberStatusId($data->{'targetGroupMemberStatusId'});
        }
        if (property_exists($data, 'sendReminderMails')) {
            $object->setSendReminderMails($data->{'sendReminderMails'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'typeId'} = $object->getTypeId();
        $data->{'targetTypeId'} = $object->getTargetTypeId();
        if (null !== $object->getTargetObjectId()) {
            $data->{'targetObjectId'} = $object->getTargetObjectId();
        }
        if (null !== $object->getTargetGroupMemberStatusId()) {
            $data->{'targetGroupMemberStatusId'} = $object->getTargetGroupMemberStatusId();
        }
        $data->{'sendReminderMails'} = $object->getSendReminderMails();
        return $data;
    }
}