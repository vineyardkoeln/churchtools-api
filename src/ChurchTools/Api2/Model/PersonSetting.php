<?php

namespace ChurchTools\Api2\Model;

class PersonSetting
{
    /**
     * 
     *
     * @var string
     */
    protected $module;
    /**
     * 
     *
     * @var string
     */
    protected $attribute;
    /**
     * Mixed content. Each setting has its own type.
     *
     * @var mixed
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getModule() : string
    {
        return $this->module;
    }
    /**
     * 
     *
     * @param string $module
     *
     * @return self
     */
    public function setModule(string $module) : self
    {
        $this->module = $module;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttribute() : string
    {
        return $this->attribute;
    }
    /**
     * 
     *
     * @param string $attribute
     *
     * @return self
     */
    public function setAttribute(string $attribute) : self
    {
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * Mixed content. Each setting has its own type.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Mixed content. Each setting has its own type.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->value = $value;
        return $this;
    }
}