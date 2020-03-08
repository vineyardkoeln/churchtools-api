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

class GroupSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\GroupSettings();
        if (property_exists($data, 'isHidden')) {
            $object->setIsHidden($data->{'isHidden'});
        }
        if (property_exists($data, 'isOpenForMembers')) {
            $object->setIsOpenForMembers($data->{'isOpenForMembers'});
        }
        if (property_exists($data, 'autoAccept')) {
            $object->setAutoAccept($data->{'autoAccept'});
        }
        if (property_exists($data, 'isPublic')) {
            $object->setIsPublic($data->{'isPublic'});
        }
        if (property_exists($data, 'inStatistic')) {
            $object->setInStatistic($data->{'inStatistic'});
        }
        if (property_exists($data, 'groupMeeting')) {
            $object->setGroupMeeting($this->denormalizer->denormalize($data->{'groupMeeting'}, 'ChurchTools\\Api2\\Model\\GroupSettingsGroupMeeting', 'json', $context));
        }
        if (property_exists($data, 'informLeader')) {
            $object->setInformLeader($data->{'informLeader'});
        }
        if (property_exists($data, 'newMember')) {
            $object->setNewMember($this->denormalizer->denormalize($data->{'newMember'}, 'ChurchTools\\Api2\\Model\\GroupSettingsNewMember', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'isHidden'} = $object->getIsHidden();
        $data->{'isOpenForMembers'} = $object->getIsOpenForMembers();
        $data->{'autoAccept'} = $object->getAutoAccept();
        $data->{'isPublic'} = $object->getIsPublic();
        $data->{'inStatistic'} = $object->getInStatistic();
        $data->{'groupMeeting'} = $this->normalizer->normalize($object->getGroupMeeting(), 'json', $context);
        $data->{'informLeader'} = $object->getInformLeader();
        if (null !== $object->getNewMember()) {
            $data->{'newMember'} = $this->normalizer->normalize($object->getNewMember(), 'json', $context);
        }
        return $data;
    }
}
