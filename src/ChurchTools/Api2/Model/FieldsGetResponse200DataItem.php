<?php

namespace ChurchTools\Api2\Model;

class FieldsGetResponse200DataItem
{
    /**
     * ID of field
     *
     * @var int
     */
    protected $id;
    /**
     * The key of the field. This is the name that is also used when using the person or group api
     *
     * @var string
     */
    protected $key;
    /**
     * Field name
     *
     * @var string
     */
    protected $name;
    /**
     * Abbreviation
     *
     * @var string
     */
    protected $shorty;
    /**
     * The intern code of the field category the field belongs to
     *
     * @var string
     */
    protected $fieldCategoryCode;
    /**
     * The intern code of the field type the field belongs to
     *
     * @var string
     */
    protected $fieldTypeCode;
    /**
     * Active Flag
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Defines if the field can be used as parameter when creating new persons
     *
     * @var bool
     */
    protected $isNewPersonField;
    /**
     * The line ending that should be used when displaying the field
     *
     * @var string
     */
    protected $lineEnding;
    /**
     * The security level necessary to see this field
     *
     * @var int
     */
    protected $secLevel;
    /**
     * The max length of the field
     *
     * @var int|null
     */
    protected $length;
    /**
     * Whether the field should be deleted on person archive or not
     *
     * @var bool
     */
    protected $deleteOnArchive;
    /**
     * Should define if a field can be null. This is sadly not really enforced in the application right now. So don't bet on it.
     *
     * @var bool
     */
    protected $nullable;
    /**
     * Used to sort all campuses
     *
     * @var int
     */
    protected $sortKey;
    /**
     * ID of field
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of field
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The key of the field. This is the name that is also used when using the person or group api
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * The key of the field. This is the name that is also used when using the person or group api
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Field name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Field name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Abbreviation
     *
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * Abbreviation
     *
     * @param string $shorty
     *
     * @return self
     */
    public function setShorty(string $shorty) : self
    {
        $this->shorty = $shorty;
        return $this;
    }
    /**
     * The intern code of the field category the field belongs to
     *
     * @return string
     */
    public function getFieldCategoryCode() : string
    {
        return $this->fieldCategoryCode;
    }
    /**
     * The intern code of the field category the field belongs to
     *
     * @param string $fieldCategoryCode
     *
     * @return self
     */
    public function setFieldCategoryCode(string $fieldCategoryCode) : self
    {
        $this->fieldCategoryCode = $fieldCategoryCode;
        return $this;
    }
    /**
     * The intern code of the field type the field belongs to
     *
     * @return string
     */
    public function getFieldTypeCode() : string
    {
        return $this->fieldTypeCode;
    }
    /**
     * The intern code of the field type the field belongs to
     *
     * @param string $fieldTypeCode
     *
     * @return self
     */
    public function setFieldTypeCode(string $fieldTypeCode) : self
    {
        $this->fieldTypeCode = $fieldTypeCode;
        return $this;
    }
    /**
     * Active Flag
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * Active Flag
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Defines if the field can be used as parameter when creating new persons
     *
     * @return bool
     */
    public function getIsNewPersonField() : bool
    {
        return $this->isNewPersonField;
    }
    /**
     * Defines if the field can be used as parameter when creating new persons
     *
     * @param bool $isNewPersonField
     *
     * @return self
     */
    public function setIsNewPersonField(bool $isNewPersonField) : self
    {
        $this->isNewPersonField = $isNewPersonField;
        return $this;
    }
    /**
     * The line ending that should be used when displaying the field
     *
     * @return string
     */
    public function getLineEnding() : string
    {
        return $this->lineEnding;
    }
    /**
     * The line ending that should be used when displaying the field
     *
     * @param string $lineEnding
     *
     * @return self
     */
    public function setLineEnding(string $lineEnding) : self
    {
        $this->lineEnding = $lineEnding;
        return $this;
    }
    /**
     * The security level necessary to see this field
     *
     * @return int
     */
    public function getSecLevel() : int
    {
        return $this->secLevel;
    }
    /**
     * The security level necessary to see this field
     *
     * @param int $secLevel
     *
     * @return self
     */
    public function setSecLevel(int $secLevel) : self
    {
        $this->secLevel = $secLevel;
        return $this;
    }
    /**
     * The max length of the field
     *
     * @return int|null
     */
    public function getLength() : ?int
    {
        return $this->length;
    }
    /**
     * The max length of the field
     *
     * @param int|null $length
     *
     * @return self
     */
    public function setLength(?int $length) : self
    {
        $this->length = $length;
        return $this;
    }
    /**
     * Whether the field should be deleted on person archive or not
     *
     * @return bool
     */
    public function getDeleteOnArchive() : bool
    {
        return $this->deleteOnArchive;
    }
    /**
     * Whether the field should be deleted on person archive or not
     *
     * @param bool $deleteOnArchive
     *
     * @return self
     */
    public function setDeleteOnArchive(bool $deleteOnArchive) : self
    {
        $this->deleteOnArchive = $deleteOnArchive;
        return $this;
    }
    /**
     * Should define if a field can be null. This is sadly not really enforced in the application right now. So don't bet on it.
     *
     * @return bool
     */
    public function getNullable() : bool
    {
        return $this->nullable;
    }
    /**
     * Should define if a field can be null. This is sadly not really enforced in the application right now. So don't bet on it.
     *
     * @param bool $nullable
     *
     * @return self
     */
    public function setNullable(bool $nullable) : self
    {
        $this->nullable = $nullable;
        return $this;
    }
    /**
     * Used to sort all campuses
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * Used to sort all campuses
     *
     * @param int $sortKey
     *
     * @return self
     */
    public function setSortKey(int $sortKey) : self
    {
        $this->sortKey = $sortKey;
        return $this;
    }
}