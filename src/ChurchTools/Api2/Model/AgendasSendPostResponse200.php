<?php

namespace ChurchTools\Api2\Model;

class AgendasSendPostResponse200
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $translatedMessage;
    /**
     * 
     *
     * @var string
     */
    protected $messageKey;
    /**
     * 
     *
     * @var AgendasSendPostResponse200Args
     */
    protected $args;
    /**
     * Array of DomainObjects with people, who have no eMail Addresses.
     *
     * @var AgendasSendPostResponse200ErrorsItem[]
     */
    protected $errors;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTranslatedMessage() : string
    {
        return $this->translatedMessage;
    }
    /**
     * 
     *
     * @param string $translatedMessage
     *
     * @return self
     */
    public function setTranslatedMessage(string $translatedMessage) : self
    {
        $this->translatedMessage = $translatedMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessageKey() : string
    {
        return $this->messageKey;
    }
    /**
     * 
     *
     * @param string $messageKey
     *
     * @return self
     */
    public function setMessageKey(string $messageKey) : self
    {
        $this->messageKey = $messageKey;
        return $this;
    }
    /**
     * 
     *
     * @return AgendasSendPostResponse200Args
     */
    public function getArgs() : AgendasSendPostResponse200Args
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param AgendasSendPostResponse200Args $args
     *
     * @return self
     */
    public function setArgs(AgendasSendPostResponse200Args $args) : self
    {
        $this->args = $args;
        return $this;
    }
    /**
     * Array of DomainObjects with people, who have no eMail Addresses.
     *
     * @return AgendasSendPostResponse200ErrorsItem[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * Array of DomainObjects with people, who have no eMail Addresses.
     *
     * @param AgendasSendPostResponse200ErrorsItem[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}