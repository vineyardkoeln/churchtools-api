<?php

namespace ChurchTools\Api2\Model;

class FilesDomainTypeDomainIdentifierPostResponse200
{
    /**
     * 
     *
     * @var File[]
     */
    protected $data;
    /**
     * 
     *
     * @var FilesDomainTypeDomainIdentifierPostResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return File[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param File[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return FilesDomainTypeDomainIdentifierPostResponse200Meta
     */
    public function getMeta() : FilesDomainTypeDomainIdentifierPostResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param FilesDomainTypeDomainIdentifierPostResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(FilesDomainTypeDomainIdentifierPostResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}