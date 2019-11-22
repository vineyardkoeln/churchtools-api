<?php

namespace ChurchTools\Api2\Model;

class AgendasSendPostResponse200ErrorsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $titel;
    /**
     * 
     *
     * @var string
     */
    protected $domainType;
    /**
     * 
     *
     * @var string
     */
    protected $domainIdentifier;
    /**
     * 
     *
     * @var string
     */
    protected $apiUrl;
    /**
     * 
     *
     * @var string
     */
    protected $frontendUrl;
    /**
     * 
     *
     * @var string
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var AgendasSendPostResponse200ErrorsItemDomainAttributes
     */
    protected $domainAttributes;
    /**
     * 
     *
     * @return string
     */
    public function getTitel() : string
    {
        return $this->titel;
    }
    /**
     * 
     *
     * @param string $titel
     *
     * @return self
     */
    public function setTitel(string $titel) : self
    {
        $this->titel = $titel;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainType() : string
    {
        return $this->domainType;
    }
    /**
     * 
     *
     * @param string $domainType
     *
     * @return self
     */
    public function setDomainType(string $domainType) : self
    {
        $this->domainType = $domainType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainIdentifier() : string
    {
        return $this->domainIdentifier;
    }
    /**
     * 
     *
     * @param string $domainIdentifier
     *
     * @return self
     */
    public function setDomainIdentifier(string $domainIdentifier) : self
    {
        $this->domainIdentifier = $domainIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApiUrl() : string
    {
        return $this->apiUrl;
    }
    /**
     * 
     *
     * @param string $apiUrl
     *
     * @return self
     */
    public function setApiUrl(string $apiUrl) : self
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFrontendUrl() : string
    {
        return $this->frontendUrl;
    }
    /**
     * 
     *
     * @param string $frontendUrl
     *
     * @return self
     */
    public function setFrontendUrl(string $frontendUrl) : self
    {
        $this->frontendUrl = $frontendUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageUrl() : string
    {
        return $this->imageUrl;
    }
    /**
     * 
     *
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(string $imageUrl) : self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return AgendasSendPostResponse200ErrorsItemDomainAttributes
     */
    public function getDomainAttributes() : AgendasSendPostResponse200ErrorsItemDomainAttributes
    {
        return $this->domainAttributes;
    }
    /**
     * 
     *
     * @param AgendasSendPostResponse200ErrorsItemDomainAttributes $domainAttributes
     *
     * @return self
     */
    public function setDomainAttributes(AgendasSendPostResponse200ErrorsItemDomainAttributes $domainAttributes) : self
    {
        $this->domainAttributes = $domainAttributes;
        return $this;
    }
}