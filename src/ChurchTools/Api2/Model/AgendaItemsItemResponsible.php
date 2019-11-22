<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItemResponsible
{
    /**
     * Raw text string. You need to search-replace the placeholders yourself.
     *
     * @var string
     */
    protected $text;
    /**
     * Array of all persons, who could be resolved from the text string. If a service has multiple positions, multiple objects are in the array with the same `service` text string. If a service is not yet set the `person` object will be null.
     *
     * @var AgendaItemsItemResponsiblePersonsItem[]
     */
    protected $persons;
    /**
     * Raw text string. You need to search-replace the placeholders yourself.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Raw text string. You need to search-replace the placeholders yourself.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * Array of all persons, who could be resolved from the text string. If a service has multiple positions, multiple objects are in the array with the same `service` text string. If a service is not yet set the `person` object will be null.
     *
     * @return AgendaItemsItemResponsiblePersonsItem[]
     */
    public function getPersons() : array
    {
        return $this->persons;
    }
    /**
     * Array of all persons, who could be resolved from the text string. If a service has multiple positions, multiple objects are in the array with the same `service` text string. If a service is not yet set the `person` object will be null.
     *
     * @param AgendaItemsItemResponsiblePersonsItem[] $persons
     *
     * @return self
     */
    public function setPersons(array $persons) : self
    {
        $this->persons = $persons;
        return $this;
    }
}