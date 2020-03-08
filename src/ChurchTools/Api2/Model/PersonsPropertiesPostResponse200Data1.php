<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostResponse200Data1
{
    /**
     *
     *
     * @var bool
     */
    protected $hasEmail;
    /**
     *
     *
     * @return bool
     */
    public function getHasEmail() : bool
    {
        return $this->hasEmail;
    }
    /**
     *
     *
     * @param bool $hasEmail
     *
     * @return self
     */
    public function setHasEmail(bool $hasEmail) : self
    {
        $this->hasEmail = $hasEmail;
        return $this;
    }
}
