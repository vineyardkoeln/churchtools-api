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
class PersonsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChurchTools\\Api2\\Model\\PersonsPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChurchTools\\Api2\\Model\\PersonsPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChurchTools\Api2\Model\PersonsPostBody();
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'firstName')) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName')) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'nickname')) {
            $object->setNickname($data->{'nickname'});
        }
        if (property_exists($data, 'job')) {
            $object->setJob($data->{'job'});
        }
        if (property_exists($data, 'street')) {
            $object->setStreet($data->{'street'});
        }
        if (property_exists($data, 'addressAddition')) {
            $object->setAddressAddition($data->{'addressAddition'});
        }
        if (property_exists($data, 'zip')) {
            $object->setZip($data->{'zip'});
        }
        if (property_exists($data, 'city')) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'phonePrivate')) {
            $object->setPhonePrivate($data->{'phonePrivate'});
        }
        if (property_exists($data, 'phoneWork')) {
            $object->setPhoneWork($data->{'phoneWork'});
        }
        if (property_exists($data, 'mobile')) {
            $object->setMobile($data->{'mobile'});
        }
        if (property_exists($data, 'fax')) {
            $object->setFax($data->{'fax'});
        }
        if (property_exists($data, 'birthName')) {
            $object->setBirthName($data->{'birthName'});
        }
        if (property_exists($data, 'birthday')) {
            $object->setBirthday($data->{'birthday'});
        }
        if (property_exists($data, 'birthplace')) {
            $object->setBirthplace($data->{'birthplace'});
        }
        if (property_exists($data, 'sexId')) {
            $object->setSexId($data->{'sexId'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'cmsUserId')) {
            $object->setCmsUserId($data->{'cmsUserId'});
        }
        if (property_exists($data, 'optigemId')) {
            $object->setOptigemId($data->{'optigemId'});
        }
        if (property_exists($data, 'privacyPolicyAgreement')) {
            $object->setPrivacyPolicyAgreement($this->denormalizer->denormalize($data->{'privacyPolicyAgreement'}, 'ChurchTools\\Api2\\Model\\PersonsPostBodyPrivacyPolicyAgreement', 'json', $context));
        }
        if (property_exists($data, 'nationalityId')) {
            $object->setNationalityId($data->{'nationalityId'});
        }
        if (property_exists($data, 'familyStatusId')) {
            $object->setFamilyStatusId($data->{'familyStatusId'});
        }
        if (property_exists($data, 'weddingDate')) {
            $object->setWeddingDate($data->{'weddingDate'});
        }
        if (property_exists($data, 'campusId')) {
            $object->setCampusId($data->{'campusId'});
        }
        if (property_exists($data, 'statusId')) {
            $object->setStatusId($data->{'statusId'});
        }
        if (property_exists($data, 'firstContact')) {
            $object->setFirstContact(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'firstContact'}));
        }
        if (property_exists($data, 'dateOfBelonging')) {
            $object->setDateOfBelonging($data->{'dateOfBelonging'});
        }
        if (property_exists($data, 'dateOfEntry')) {
            $object->setDateOfEntry(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'dateOfEntry'}));
        }
        if (property_exists($data, 'dateOfResign')) {
            $object->setDateOfResign(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'dateOfResign'}));
        }
        if (property_exists($data, 'dateOfBaptism')) {
            $object->setDateOfBaptism($data->{'dateOfBaptism'});
        }
        if (property_exists($data, 'placeOfBaptism')) {
            $object->setPlaceOfBaptism($data->{'placeOfBaptism'});
        }
        if (property_exists($data, 'baptisedBy')) {
            $object->setBaptisedBy($data->{'baptisedBy'});
        }
        if (property_exists($data, 'referredBy')) {
            $object->setReferredBy($data->{'referredBy'});
        }
        if (property_exists($data, 'referredTo')) {
            $object->setReferredTo($data->{'referredTo'});
        }
        if (property_exists($data, 'growPathId')) {
            $object->setGrowPathId($data->{'growPathId'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        if (null !== $object->getNickname()) {
            $data->{'nickname'} = $object->getNickname();
        }
        if (null !== $object->getJob()) {
            $data->{'job'} = $object->getJob();
        }
        if (null !== $object->getStreet()) {
            $data->{'street'} = $object->getStreet();
        }
        if (null !== $object->getAddressAddition()) {
            $data->{'addressAddition'} = $object->getAddressAddition();
        }
        if (null !== $object->getZip()) {
            $data->{'zip'} = $object->getZip();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getPhonePrivate()) {
            $data->{'phonePrivate'} = $object->getPhonePrivate();
        }
        if (null !== $object->getPhoneWork()) {
            $data->{'phoneWork'} = $object->getPhoneWork();
        }
        if (null !== $object->getMobile()) {
            $data->{'mobile'} = $object->getMobile();
        }
        if (null !== $object->getFax()) {
            $data->{'fax'} = $object->getFax();
        }
        if (null !== $object->getBirthName()) {
            $data->{'birthName'} = $object->getBirthName();
        }
        if (null !== $object->getBirthday()) {
            $data->{'birthday'} = $object->getBirthday();
        }
        if (null !== $object->getBirthplace()) {
            $data->{'birthplace'} = $object->getBirthplace();
        }
        if (null !== $object->getSexId()) {
            $data->{'sexId'} = $object->getSexId();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getCmsUserId()) {
            $data->{'cmsUserId'} = $object->getCmsUserId();
        }
        if (null !== $object->getOptigemId()) {
            $data->{'optigemId'} = $object->getOptigemId();
        }
        $data->{'privacyPolicyAgreement'} = $this->normalizer->normalize($object->getPrivacyPolicyAgreement(), 'json', $context);
        if (null !== $object->getNationalityId()) {
            $data->{'nationalityId'} = $object->getNationalityId();
        }
        if (null !== $object->getFamilyStatusId()) {
            $data->{'familyStatusId'} = $object->getFamilyStatusId();
        }
        if (null !== $object->getWeddingDate()) {
            $data->{'weddingDate'} = $object->getWeddingDate();
        }
        $data->{'campusId'} = $object->getCampusId();
        $data->{'statusId'} = $object->getStatusId();
        if (null !== $object->getFirstContact()) {
            $data->{'firstContact'} = $object->getFirstContact()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDateOfBelonging()) {
            $data->{'dateOfBelonging'} = $object->getDateOfBelonging();
        }
        if (null !== $object->getDateOfEntry()) {
            $data->{'dateOfEntry'} = $object->getDateOfEntry()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDateOfResign()) {
            $data->{'dateOfResign'} = $object->getDateOfResign()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDateOfBaptism()) {
            $data->{'dateOfBaptism'} = $object->getDateOfBaptism();
        }
        if (null !== $object->getPlaceOfBaptism()) {
            $data->{'placeOfBaptism'} = $object->getPlaceOfBaptism();
        }
        if (null !== $object->getBaptisedBy()) {
            $data->{'baptisedBy'} = $object->getBaptisedBy();
        }
        if (null !== $object->getReferredBy()) {
            $data->{'referredBy'} = $object->getReferredBy();
        }
        if (null !== $object->getReferredTo()) {
            $data->{'referredTo'} = $object->getReferredTo();
        }
        if (null !== $object->getGrowPathId()) {
            $data->{'growPathId'} = $object->getGrowPathId();
        }
        return $data;
    }
}