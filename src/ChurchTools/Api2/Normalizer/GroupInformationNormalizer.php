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
class GroupInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\GroupInformation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\GroupInformation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\GroupInformation();
        if (property_exists($data, 'imageUrl')) {
            $object->setImageUrl($data->{'imageUrl'});
        }
        if (property_exists($data, 'dateOfFoundation')) {
            $object->setDateOfFoundation($data->{'dateOfFoundation'});
        }
        if (property_exists($data, 'endDate')) {
            $object->setEndDate($data->{'endDate'});
        }
        if (property_exists($data, 'meetingTime')) {
            $object->setMeetingTime($data->{'meetingTime'});
        }
        if (property_exists($data, 'weekday')) {
            $object->setWeekday($data->{'weekday'});
        }
        if (property_exists($data, 'groupCategoryId')) {
            $object->setGroupCategoryId($data->{'groupCategoryId'});
        }
        if (property_exists($data, 'ageGroups')) {
            $values = array();
            foreach ($data->{'ageGroups'} as $value) {
                $values[] = $value;
            }
            $object->setAgeGroups($values);
        }
        if (property_exists($data, 'targetGroupId')) {
            $object->setTargetGroupId($data->{'targetGroupId'});
        }
        if (property_exists($data, 'maxMembers')) {
            $object->setMaxMembers($data->{'maxMembers'});
        }
        if (property_exists($data, 'groupTypeId')) {
            $object->setGroupTypeId($data->{'groupTypeId'});
        }
        if (property_exists($data, 'groupStatusId')) {
            $object->setGroupStatusId($data->{'groupStatusId'});
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'campusId')) {
            $object->setCampusId($data->{'campusId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getImageUrl()) {
            $data->{'imageUrl'} = $object->getImageUrl();
        }
        if (null !== $object->getDateOfFoundation()) {
            $data->{'dateOfFoundation'} = $object->getDateOfFoundation();
        }
        if (null !== $object->getEndDate()) {
            $data->{'endDate'} = $object->getEndDate();
        }
        if (null !== $object->getMeetingTime()) {
            $data->{'meetingTime'} = $object->getMeetingTime();
        }
        if (null !== $object->getWeekday()) {
            $data->{'weekday'} = $object->getWeekday();
        }
        if (null !== $object->getGroupCategoryId()) {
            $data->{'groupCategoryId'} = $object->getGroupCategoryId();
        }
        $values = array();
        foreach ($object->getAgeGroups() as $value) {
            $values[] = $value;
        }
        $data->{'ageGroups'} = $values;
        if (null !== $object->getTargetGroupId()) {
            $data->{'targetGroupId'} = $object->getTargetGroupId();
        }
        if (null !== $object->getMaxMembers()) {
            $data->{'maxMembers'} = $object->getMaxMembers();
        }
        $data->{'groupTypeId'} = $object->getGroupTypeId();
        $data->{'groupStatusId'} = $object->getGroupStatusId();
        $data->{'note'} = $object->getNote();
        if (null !== $object->getCampusId()) {
            $data->{'campusId'} = $object->getCampusId();
        }
        return $data;
    }
}