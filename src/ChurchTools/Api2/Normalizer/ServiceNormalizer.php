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

class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\Service';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\Service';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\Service();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'serviceGroupId')) {
            $object->setServiceGroupId($data->{'serviceGroupId'});
        }
        if (property_exists($data, 'commentOnConfirmation')) {
            $object->setCommentOnConfirmation($data->{'commentOnConfirmation'});
        }
        if (property_exists($data, 'sortKey')) {
            $object->setSortKey($data->{'sortKey'});
        }
        if (property_exists($data, 'allowDecline')) {
            $object->setAllowDecline($data->{'allowDecline'});
        }
        if (property_exists($data, 'allowExchange')) {
            $object->setAllowExchange($data->{'allowExchange'});
        }
        if (property_exists($data, 'comment')) {
            $object->setComment($data->{'comment'});
        }
        if (property_exists($data, 'standard')) {
            $object->setStandard($data->{'standard'});
        }
        if (property_exists($data, 'hidePersonName')) {
            $object->setHidePersonName($data->{'hidePersonName'});
        }
        if (property_exists($data, 'sendReminderMails')) {
            $object->setSendReminderMails($data->{'sendReminderMails'});
        }
        if (property_exists($data, 'sendServiceRequestEmails')) {
            $object->setSendServiceRequestEmails($data->{'sendServiceRequestEmails'});
        }
        if (property_exists($data, 'allowControlLiveAgenda')) {
            $object->setAllowControlLiveAgenda($data->{'allowControlLiveAgenda'});
        }
        if (property_exists($data, 'groupIds')) {
            $object->setGroupIds($data->{'groupIds'});
        }
        if (property_exists($data, 'tagIds')) {
            $object->setTagIds($data->{'tagIds'});
        }
        if (property_exists($data, 'calTextTemplate')) {
            $object->setCalTextTemplate($data->{'calTextTemplate'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'id'} = $object->getId();
        $data->{'name'} = $object->getName();
        $data->{'serviceGroupId'} = $object->getServiceGroupId();
        $data->{'commentOnConfirmation'} = $object->getCommentOnConfirmation();
        $data->{'sortKey'} = $object->getSortKey();
        $data->{'allowDecline'} = $object->getAllowDecline();
        $data->{'allowExchange'} = $object->getAllowExchange();
        $data->{'comment'} = $object->getComment();
        $data->{'standard'} = $object->getStandard();
        $data->{'hidePersonName'} = $object->getHidePersonName();
        $data->{'sendReminderMails'} = $object->getSendReminderMails();
        $data->{'sendServiceRequestEmails'} = $object->getSendServiceRequestEmails();
        $data->{'allowControlLiveAgenda'} = $object->getAllowControlLiveAgenda();
        if (null !== $object->getGroupIds()) {
            $data->{'groupIds'} = $object->getGroupIds();
        }
        if (null !== $object->getTagIds()) {
            $data->{'tagIds'} = $object->getTagIds();
        }
        $data->{'calTextTemplate'} = $object->getCalTextTemplate();
        return $data;
    }
}
