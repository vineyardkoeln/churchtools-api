<?php

namespace ChurchTools\Api2\Model;

class FieldsGetResponse200
{
    /**
     * 
     *
     * @var FieldsGetResponse200DataItem[]
     */
    protected $data;
    /**
     * 
     *
     * @var FieldsGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return FieldsGetResponse200DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param FieldsGetResponse200DataItem[] $data
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
     * @return FieldsGetResponse200Meta
     */
    public function getMeta() : FieldsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param FieldsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(FieldsGetResponse200Meta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}