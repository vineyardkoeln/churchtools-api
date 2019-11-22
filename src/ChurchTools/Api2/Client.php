<?php

namespace ChurchTools\Api2;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChurchTools\Api2\Model\InfoGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getApiInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetApiInfo(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChurchTools\Api2\Model\WhoamiGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrentUser(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetCurrentUser(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllCampusesUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllCampusesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\CampusesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllCampuses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllCampuses(), $fetch);
    }
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\CampusesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\CreateNewCampusBadRequestException
     * @throws \ChurchTools\Api2\Exception\CreateNewCampusPaymentRequiredException
     *
     * @return null|\ChurchTools\Api2\Model\CampusesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewCampus(\ChurchTools\Api2\Model\CampusesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\CreateNewCampus($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of campus
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\DeleteCampusByIdUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\DeleteCampusByIdForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCampusById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\DeleteCampusById($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of campus
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetCampusByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetCampusByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CampusesIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getCampusById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetCampusById($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of campus
     * @param \ChurchTools\Api2\Model\CampusesIdPutBody|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChurchTools\Api2\Model\CampusesIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putCampusById(int $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\PutCampusById($id, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllFieldsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllFieldsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\FieldsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllFields(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllFields(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllStatusesUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllStatusesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\StatusesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllStatuses(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllStatuses(), $fetch);
    }
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\StatusesPostBody|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\CreateNewStatusBadRequestException
     *
     * @return null|\ChurchTools\Api2\Model\StatusesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewStatus($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\CreateNewStatus($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of status
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\DeleteStatusByIdUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\DeleteStatusByIdForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteStatusById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\DeleteStatusById($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of status
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetStatusByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetStatusByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\StatusesIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getStatusById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetStatusById($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of status
     * @param \ChurchTools\Api2\Model\StatusesIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChurchTools\Api2\Model\StatusesIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function putStatusById(int $id, \ChurchTools\Api2\Model\StatusesIdPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\PutStatusById($id, $requestBody), $fetch);
    }
    /**
     * This endpoint gives you all the people you are allowed to see. Each person object holds only those fields you may see. You will get at least an empty array even if you cannot see any person.<br><br> We distinguish between `date` and `date-time` fields. `date` is a ISO representation like `YYYY-MM-DD`. On the other hand, for `date-time` we return and accept a <a href="https://www.w3.org/TR/NOTE-datetime">W3C Zulu date string</a>. Example `1994-11-05T08:15:30Z`
     *
     * @param array $queryParameters {
     *     @var array $ids Array of person ids
     *     @var array $status_ids Filter by status id
     *     @var array $campus_ids Filter by campus id
     *     @var string $birthday_before Filter by birthdays before that date (Format: YYYY-MM-DD)
     *     @var string $birthday_after Filter by birthdays after that date (Format: YYYY-MM-DD)
     *     @var bool $is_archived Show only archived or not archived people
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllPersonsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllPersons(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllPersons($queryParameters), $fetch);
    }
    /**
     * Endpoint to save a new person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. If the request fails because a duplicate is found (person with same name) use the `force` flag to create this person even if a duplicate is found.
     *
     * @param \ChurchTools\Api2\Model\PersonsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $force Force the action, which would otherwise fail.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\CreatePersonBadRequestException
     * @throws \ChurchTools\Api2\Exception\CreatePersonPaymentRequiredException
     * @throws \ChurchTools\Api2\Exception\CreatePersonForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createPerson(\ChurchTools\Api2\Model\PersonsPostBody $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\CreatePerson($requestBody, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\PersonsPropertiesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonPropertiesUnauthorizedException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsPropertiesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonProperties(\ChurchTools\Api2\Model\PersonsPropertiesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonProperties($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or GUID of person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\DeletePersonUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\DeletePersonForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePerson(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\DeletePerson($id), $fetch);
    }
    /**
     * Each person as a unique numeric ID in ChurchTools. This ID is used all over in ChurchTools and in the API.
     *
     * @param string $id ID or GUID of person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetPersonByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonById(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonById($id), $fetch);
    }
    /**
     * Endpoint to update a person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. Beware, that not all fields which are listed in the Person schema can be updated. E.g. `imageUrl` or `familyUrl`.
     *
     * @param string $id ID or GUID of person
     * @param \stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\PatchPersonBadRequestException
     * @throws \ChurchTools\Api2\Exception\PatchPersonForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function patchPerson(string $id, \stdClass $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\PatchPerson($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $id ID or GUID of person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonTagsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetPersonTagsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdTagsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonTags(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonTags($id), $fetch);
    }
    /**
     * This endpoint returns all relationships of this person. The result is sorted by 1. the `sortkey` of the relationship type, 2. last name, and 3. first name of a person.
     *
     * @param string $id ID or GUID of person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonRelationshipsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetPersonRelationshipsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdRelationshipsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonRelationships(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonRelationships($id), $fetch);
    }
    /**
     * Use this endpoint to get all person settings for this user.
     *
     * @param string $id ID or GUID of person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllPersonSettingsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllPersonSettings(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllPersonSettings($id), $fetch);
    }
    /**
     * Person settings are grouped per module. This endpoint returns an array of all user settings for a person of this module.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonModuleSettingsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonModuleSettings(string $id, string $module, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonModuleSettings($id, $module), $fetch);
    }
    /**
     * Deleting settings is sometimes useful or necessary. This endpoint can be used to delete one specific setting.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param string $attribute Attribute name of setting
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\DeletePersonSettingForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePersonSetting(string $id, string $module, string $attribute, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\DeletePersonSetting($id, $module, $attribute), $fetch);
    }
    /**
     * To retrieve a specific person setting, use this endpoint. A setting is identifies by `module` and `attribute`.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param string $attribute Attribute name of setting
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonSettingForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleAttributeGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonSetting(string $id, string $module, string $attribute, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonSetting($id, $module, $attribute), $fetch);
    }
    /**
     * <strong>Important:</strong> Not all settings are supported to update over this endpoint. The API will tell you if you are allowed to update a setting.<br>This endpoint can be used to update a value of an existing setting or create it if it does not exists, yet.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param string $attribute Attribute name of setting
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\UpdatePersonSettingForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleAttributePutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updatePersonSetting(string $id, string $module, string $attribute, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\UpdatePersonSetting($id, $module, $attribute), $fetch);
    }
    /**
     * Gets a list of all events that a person is involved
     *
     * @param string $id ID of person
     * @param array $queryParameters {
     *     @var string $from Start date from when events are returned. Default value: today
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetPersonEventsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdEventsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getPersonEvents(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetPersonEvents($id, $queryParameters), $fetch);
    }
    /**
     * This endpoint returns an array with all groups the user can see. This includes groups the user is a member off as well as subordinate groups the user is allowed to see.
     *
     * @param array $queryParameters {
     *     @var array $ids Array of group ids
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllGroupsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllGroupsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\GroupsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllGroups($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of group
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetGroupByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetGroupByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\GroupsIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getGroupById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetGroupById($id), $fetch);
    }
    /**
     * This endpoint returns an array with all group members of one group.
     *
     * @param int $id ID of group
     * @param array $queryParameters {
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllGroupMembersUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllGroupMembersForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\GroupsIdMembersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllGroupMembers(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllGroupMembers($id, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllServiceGroupsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllServiceGroupsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\ServicegroupsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllServiceGroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllServiceGroups(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllServicesUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllServicesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\ServicesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllServices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllServices(), $fetch);
    }
    /**
     * Returns all tags of type persons or songs
     *
     * @param array $queryParameters {
     *     @var string $type Type of tags
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetTagsForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetTagsNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\Tag[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTags(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetTags($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\TagsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\SaveTagForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\TagsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function saveTag(\ChurchTools\Api2\Model\TagsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\SaveTag($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllDepartmentsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllDepartmentsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\DepartmentsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllDepartments(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllDepartments(), $fetch);
    }
    /**
     * 
     *
     * @param string $domainType The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
     * @param string $domainIdentifier the domain identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\DeleteFilesForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteFiles(string $domainType, string $domainIdentifier, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\DeleteFiles($domainType, $domainIdentifier), $fetch);
    }
    /**
     * 
     *
     * @param string $domainType The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
     * @param string $domainIdentifier the domain identifier
     * @param \ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\UploadFilesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function uploadFiles(string $domainType, string $domainIdentifier, \ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\UploadFiles($domainType, $domainIdentifier, $requestBody), $fetch);
    }
    /**
     * The response is a collection of all log messages you may see and is limited to a specific number of messages. You can use the `page` parameter to browse the list of log messages. The logs are ordered by date.
     *
     * @param array $queryParameters {
     *     @var string $message Filter by text
     *     @var array $levels Filter by log level
     *     @var string $before Filter log messages before that date. (Format: YYYY-MM-DD\Thh:mm:ssZ)
     *     @var string $after Filter log messages after that date. (Format: YYYY-MM-DD\Thh:mm:ssZ)
     *     @var int $person_id Filter by person
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllLogsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\LogsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllLogs(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllLogs($queryParameters), $fetch);
    }
    /**
     * Fetch one specific log message by its ID.
     *
     * @param int $id ID of log
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetLogByIdForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\LogsIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getLogById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetLogById($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllTemplatesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllTemplates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllTemplates(), $fetch);
    }
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\CreateTemplateForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function createTemplate(\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\CreateTemplate($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\DeleteTemplateForbiddenException
     * @throws \ChurchTools\Api2\Exception\DeleteTemplateNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTemplate(int $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\DeleteTemplate($templateId), $fetch);
    }
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetTemplateByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetTemplateByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesTemplateIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTemplateById(int $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetTemplateById($templateId), $fetch);
    }
    /**
     * 
     *
     * @param int $templateId ID of appointment template
     * @param \stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\UpdateTemplateForbiddenException
     * @throws \ChurchTools\Api2\Exception\UpdateTemplateNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CalendarsAppointmentsTemplatesTemplateIdPutResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateTemplate(int $templateId, \stdClass $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\UpdateTemplate($templateId, $requestBody), $fetch);
    }
    /**
     * Fetch all agenda items.
     *
     * @param int $eventId ID of corresponding event
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAgendaForEventForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\EventsEventIdAgendaGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAgendaForEvent(int $eventId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAgendaForEvent($eventId), $fetch);
    }
    /**
     * A agenda can be sent to multiple people at once. Recipients can be participants of one of the events, whereby the user sending the mail MUST see the service groups, or the user can add additional recipients from the list of people the user can see. To send a mail the user MUST see the agenda.
     *
     * @param \ChurchTools\Api2\Model\AgendasSendPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\SendAgendaEmailBadRequestException
     * @throws \ChurchTools\Api2\Exception\SendAgendaEmailForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\AgendasSendPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function sendAgendaEmail(\ChurchTools\Api2\Model\AgendasSendPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\SendAgendaEmail($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetAllGroupTypeRolesUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllGroupTypeRolesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\MasterdataPersonRolesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllGroupTypeRoles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetAllGroupTypeRoles(), $fetch);
    }
    /**
     * 
     *
     * @param int $roleId ID of group type role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\MasterdataPersonRolesRoleIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getMasterdataPersonRoleByRoleId(int $roleId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChurchTools\Api2\Endpoint\GetMasterdataPersonRoleByRoleId($roleId), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/api');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(\ChurchTools\Api2\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}