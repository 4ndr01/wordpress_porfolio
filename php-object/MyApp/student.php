<?php

namespace MyApp;

class student extends person
{

    private array $notes;

    public function __construct(string $FirstName, string $lastName)
    {
        parent::__construct($FirstName, $lastName);
        $this->setNotes([]);
    }

    /**
     * @return array
     */
    public function getNotes(): array
    {
        return $this->notes;
    }

    /**
     * @param array $notes
     */
    public function setNotes(array $notes): void
    {
        $this->notes = $notes;
    }

    public function addNote(float $note):void
    {
        $this->notes[]=$note;
    }

    public function getType(): string
    {
        return "Etudiant";
    }
}

