<?php

namespace ChurchTools\Api2\Model;

class InfoGetResponse200
{
    /**
     *
     *
     * @var string
     */
    protected $build;
    /**
     *
     *
     * @var string
     */
    protected $version;
    /**
     *
     *
     * @return string
     */
    public function getBuild() : string
    {
        return $this->build;
    }
    /**
     *
     *
     * @param string $build
     *
     * @return self
     */
    public function setBuild(string $build) : self
    {
        $this->build = $build;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     *
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
}
