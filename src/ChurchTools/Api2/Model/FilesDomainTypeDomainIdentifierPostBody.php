<?php

namespace ChurchTools\Api2\Model;

class FilesDomainTypeDomainIdentifierPostBody
{
    /**
     *
     *
     * @var string[]
     */
    protected $files;
    /**
     *
     *
     * @return string[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     *
     *
     * @param string[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->files = $files;
        return $this;
    }
}
