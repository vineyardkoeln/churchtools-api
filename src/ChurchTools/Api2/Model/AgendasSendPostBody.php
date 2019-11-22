<?php

namespace ChurchTools\Api2\Model;

class AgendasSendPostBody
{
    /**
     * Array of event IDs. Multiple event IDs MUST be integrated events, i.e. all events share the same agenda.
     *
     * @var int[]
     */
    protected $eventIds;
    /**
     * Array of person IDs.
     *
     * @var int[]
     */
    protected $recipients;
    /**
     * Flag if a mail should be send to the user sending the request.
     *
     * @var bool
     */
    protected $sendCopyToMe = false;
    /**
     * E-Mail subject.
     *
     * @var string
     */
    protected $subject;
    /**
     * E-Mail body.
     *
     * @var string
     */
    protected $body;
    /**
     * Array of event IDs. Multiple event IDs MUST be integrated events, i.e. all events share the same agenda.
     *
     * @return int[]
     */
    public function getEventIds() : array
    {
        return $this->eventIds;
    }
    /**
     * Array of event IDs. Multiple event IDs MUST be integrated events, i.e. all events share the same agenda.
     *
     * @param int[] $eventIds
     *
     * @return self
     */
    public function setEventIds(array $eventIds) : self
    {
        $this->eventIds = $eventIds;
        return $this;
    }
    /**
     * Array of person IDs.
     *
     * @return int[]
     */
    public function getRecipients() : array
    {
        return $this->recipients;
    }
    /**
     * Array of person IDs.
     *
     * @param int[] $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients) : self
    {
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * Flag if a mail should be send to the user sending the request.
     *
     * @return bool
     */
    public function getSendCopyToMe() : bool
    {
        return $this->sendCopyToMe;
    }
    /**
     * Flag if a mail should be send to the user sending the request.
     *
     * @param bool $sendCopyToMe
     *
     * @return self
     */
    public function setSendCopyToMe(bool $sendCopyToMe) : self
    {
        $this->sendCopyToMe = $sendCopyToMe;
        return $this;
    }
    /**
     * E-Mail subject.
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * E-Mail subject.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject) : self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     * E-Mail body.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * E-Mail body.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
}