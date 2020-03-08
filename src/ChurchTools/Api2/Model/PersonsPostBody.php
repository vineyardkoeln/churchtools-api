<?php

namespace ChurchTools\Api2\Model;

class PersonsPostBody
{
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     *
     *
     * @var string|null
     */
    protected $firstName;
    /**
     *
     *
     * @var string|null
     */
    protected $lastName;
    /**
     *
     *
     * @var string|null
     */
    protected $nickname;
    /**
     *
     *
     * @var string|null
     */
    protected $job;
    /**
     *
     *
     * @var string|null
     */
    protected $street;
    /**
     *
     *
     * @var string|null
     */
    protected $addressAddition;
    /**
     *
     *
     * @var string|null
     */
    protected $zip;
    /**
     *
     *
     * @var string|null
     */
    protected $city;
    /**
     *
     *
     * @var string|null
     */
    protected $country;
    /**
     *
     *
     * @var string|null
     */
    protected $phonePrivate;
    /**
     *
     *
     * @var string|null
     */
    protected $phoneWork;
    /**
     *
     *
     * @var string|null
     */
    protected $mobile;
    /**
     *
     *
     * @var string|null
     */
    protected $fax;
    /**
     *
     *
     * @var string|null
     */
    protected $birthName;
    /**
     *
     *
     * @var string|null
     */
    protected $birthday;
    /**
     *
     *
     * @var string|null
     */
    protected $birthplace;
    /**
     *
     *
     * @var int|null
     */
    protected $sexId;
    /**
     *
     *
     * @var string|null
     */
    protected $email;
    /**
     *
     *
     * @var string|null
     */
    protected $cmsUserId;
    /**
     *
     *
     * @var int|null
     */
    protected $optigemId;
    /**
     * This object can be optional or required. Depending on your ChurchTools data security settings.
     *
     * @var PersonsPostBodyPrivacyPolicyAgreement
     */
    protected $privacyPolicyAgreement;
    /**
     *
     *
     * @var int|null
     */
    protected $nationalityId;
    /**
     *
     *
     * @var int|null
     */
    protected $familyStatusId;
    /**
     *
     *
     * @var string|null
     */
    protected $weddingDate;
    /**
     *
     *
     * @var int
     */
    protected $campusId;
    /**
     *
     *
     * @var int
     */
    protected $statusId;
    /**
     *
     *
     * @var \DateTime|null
     */
    protected $firstContact;
    /**
     *
     *
     * @var string|null
     */
    protected $dateOfBelonging;
    /**
     *
     *
     * @var \DateTime|null
     */
    protected $dateOfEntry;
    /**
     *
     *
     * @var \DateTime|null
     */
    protected $dateOfResign;
    /**
     *
     *
     * @var string|null
     */
    protected $dateOfBaptism;
    /**
     *
     *
     * @var string|null
     */
    protected $placeOfBaptism;
    /**
     *
     *
     * @var string|null
     */
    protected $baptisedBy;
    /**
     *
     *
     * @var string|null
     */
    protected $referredBy;
    /**
     *
     *
     * @var string|null
     */
    protected $referredTo;
    /**
     *
     *
     * @var int|null
     */
    protected $growPathId;
    /**
     *
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     *
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     *
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNickname() : ?string
    {
        return $this->nickname;
    }
    /**
     *
     *
     * @param string|null $nickname
     *
     * @return self
     */
    public function setNickname(?string $nickname) : self
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getJob() : ?string
    {
        return $this->job;
    }
    /**
     *
     *
     * @param string|null $job
     *
     * @return self
     */
    public function setJob(?string $job) : self
    {
        $this->job = $job;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStreet() : ?string
    {
        return $this->street;
    }
    /**
     *
     *
     * @param string|null $street
     *
     * @return self
     */
    public function setStreet(?string $street) : self
    {
        $this->street = $street;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAddressAddition() : ?string
    {
        return $this->addressAddition;
    }
    /**
     *
     *
     * @param string|null $addressAddition
     *
     * @return self
     */
    public function setAddressAddition(?string $addressAddition) : self
    {
        $this->addressAddition = $addressAddition;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getZip() : ?string
    {
        return $this->zip;
    }
    /**
     *
     *
     * @param string|null $zip
     *
     * @return self
     */
    public function setZip(?string $zip) : self
    {
        $this->zip = $zip;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     *
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     *
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPhonePrivate() : ?string
    {
        return $this->phonePrivate;
    }
    /**
     *
     *
     * @param string|null $phonePrivate
     *
     * @return self
     */
    public function setPhonePrivate(?string $phonePrivate) : self
    {
        $this->phonePrivate = $phonePrivate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPhoneWork() : ?string
    {
        return $this->phoneWork;
    }
    /**
     *
     *
     * @param string|null $phoneWork
     *
     * @return self
     */
    public function setPhoneWork(?string $phoneWork) : self
    {
        $this->phoneWork = $phoneWork;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMobile() : ?string
    {
        return $this->mobile;
    }
    /**
     *
     *
     * @param string|null $mobile
     *
     * @return self
     */
    public function setMobile(?string $mobile) : self
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFax() : ?string
    {
        return $this->fax;
    }
    /**
     *
     *
     * @param string|null $fax
     *
     * @return self
     */
    public function setFax(?string $fax) : self
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBirthName() : ?string
    {
        return $this->birthName;
    }
    /**
     *
     *
     * @param string|null $birthName
     *
     * @return self
     */
    public function setBirthName(?string $birthName) : self
    {
        $this->birthName = $birthName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBirthday() : ?string
    {
        return $this->birthday;
    }
    /**
     *
     *
     * @param string|null $birthday
     *
     * @return self
     */
    public function setBirthday(?string $birthday) : self
    {
        $this->birthday = $birthday;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBirthplace() : ?string
    {
        return $this->birthplace;
    }
    /**
     *
     *
     * @param string|null $birthplace
     *
     * @return self
     */
    public function setBirthplace(?string $birthplace) : self
    {
        $this->birthplace = $birthplace;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getSexId() : ?int
    {
        return $this->sexId;
    }
    /**
     *
     *
     * @param int|null $sexId
     *
     * @return self
     */
    public function setSexId(?int $sexId) : self
    {
        $this->sexId = $sexId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCmsUserId() : ?string
    {
        return $this->cmsUserId;
    }
    /**
     *
     *
     * @param string|null $cmsUserId
     *
     * @return self
     */
    public function setCmsUserId(?string $cmsUserId) : self
    {
        $this->cmsUserId = $cmsUserId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getOptigemId() : ?int
    {
        return $this->optigemId;
    }
    /**
     *
     *
     * @param int|null $optigemId
     *
     * @return self
     */
    public function setOptigemId(?int $optigemId) : self
    {
        $this->optigemId = $optigemId;
        return $this;
    }
    /**
     * This object can be optional or required. Depending on your ChurchTools data security settings.
     *
     * @return PersonsPostBodyPrivacyPolicyAgreement
     */
    public function getPrivacyPolicyAgreement() : PersonsPostBodyPrivacyPolicyAgreement
    {
        return $this->privacyPolicyAgreement;
    }
    /**
     * This object can be optional or required. Depending on your ChurchTools data security settings.
     *
     * @param PersonsPostBodyPrivacyPolicyAgreement $privacyPolicyAgreement
     *
     * @return self
     */
    public function setPrivacyPolicyAgreement(PersonsPostBodyPrivacyPolicyAgreement $privacyPolicyAgreement) : self
    {
        $this->privacyPolicyAgreement = $privacyPolicyAgreement;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getNationalityId() : ?int
    {
        return $this->nationalityId;
    }
    /**
     *
     *
     * @param int|null $nationalityId
     *
     * @return self
     */
    public function setNationalityId(?int $nationalityId) : self
    {
        $this->nationalityId = $nationalityId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getFamilyStatusId() : ?int
    {
        return $this->familyStatusId;
    }
    /**
     *
     *
     * @param int|null $familyStatusId
     *
     * @return self
     */
    public function setFamilyStatusId(?int $familyStatusId) : self
    {
        $this->familyStatusId = $familyStatusId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getWeddingDate() : ?string
    {
        return $this->weddingDate;
    }
    /**
     *
     *
     * @param string|null $weddingDate
     *
     * @return self
     */
    public function setWeddingDate(?string $weddingDate) : self
    {
        $this->weddingDate = $weddingDate;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getCampusId() : int
    {
        return $this->campusId;
    }
    /**
     *
     *
     * @param int $campusId
     *
     * @return self
     */
    public function setCampusId(int $campusId) : self
    {
        $this->campusId = $campusId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     *
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     *
     *
     * @return \DateTime|null
     */
    public function getFirstContact() : ?\DateTime
    {
        return $this->firstContact;
    }
    /**
     *
     *
     * @param \DateTime|null $firstContact
     *
     * @return self
     */
    public function setFirstContact(?\DateTime $firstContact) : self
    {
        $this->firstContact = $firstContact;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDateOfBelonging() : ?string
    {
        return $this->dateOfBelonging;
    }
    /**
     *
     *
     * @param string|null $dateOfBelonging
     *
     * @return self
     */
    public function setDateOfBelonging(?string $dateOfBelonging) : self
    {
        $this->dateOfBelonging = $dateOfBelonging;
        return $this;
    }
    /**
     *
     *
     * @return \DateTime|null
     */
    public function getDateOfEntry() : ?\DateTime
    {
        return $this->dateOfEntry;
    }
    /**
     *
     *
     * @param \DateTime|null $dateOfEntry
     *
     * @return self
     */
    public function setDateOfEntry(?\DateTime $dateOfEntry) : self
    {
        $this->dateOfEntry = $dateOfEntry;
        return $this;
    }
    /**
     *
     *
     * @return \DateTime|null
     */
    public function getDateOfResign() : ?\DateTime
    {
        return $this->dateOfResign;
    }
    /**
     *
     *
     * @param \DateTime|null $dateOfResign
     *
     * @return self
     */
    public function setDateOfResign(?\DateTime $dateOfResign) : self
    {
        $this->dateOfResign = $dateOfResign;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDateOfBaptism() : ?string
    {
        return $this->dateOfBaptism;
    }
    /**
     *
     *
     * @param string|null $dateOfBaptism
     *
     * @return self
     */
    public function setDateOfBaptism(?string $dateOfBaptism) : self
    {
        $this->dateOfBaptism = $dateOfBaptism;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPlaceOfBaptism() : ?string
    {
        return $this->placeOfBaptism;
    }
    /**
     *
     *
     * @param string|null $placeOfBaptism
     *
     * @return self
     */
    public function setPlaceOfBaptism(?string $placeOfBaptism) : self
    {
        $this->placeOfBaptism = $placeOfBaptism;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBaptisedBy() : ?string
    {
        return $this->baptisedBy;
    }
    /**
     *
     *
     * @param string|null $baptisedBy
     *
     * @return self
     */
    public function setBaptisedBy(?string $baptisedBy) : self
    {
        $this->baptisedBy = $baptisedBy;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getReferredBy() : ?string
    {
        return $this->referredBy;
    }
    /**
     *
     *
     * @param string|null $referredBy
     *
     * @return self
     */
    public function setReferredBy(?string $referredBy) : self
    {
        $this->referredBy = $referredBy;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getReferredTo() : ?string
    {
        return $this->referredTo;
    }
    /**
     *
     *
     * @param string|null $referredTo
     *
     * @return self
     */
    public function setReferredTo(?string $referredTo) : self
    {
        $this->referredTo = $referredTo;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getGrowPathId() : ?int
    {
        return $this->growPathId;
    }
    /**
     *
     *
     * @param int|null $growPathId
     *
     * @return self
     */
    public function setGrowPathId(?int $growPathId) : self
    {
        $this->growPathId = $growPathId;
        return $this;
    }
}
