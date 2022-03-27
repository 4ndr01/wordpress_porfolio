<?php
namespace MyApp;

abstract class person
{
    private string $FirstName;
    private string $lastName;
    private \DateTime $birthDate;

    //constructeur





    //méthodes
    /**
     * @param string $FirstName
     * @param string $lastName
     */
    public function __construct(string $FirstName, string $lastName)
    {
        $this->setFirstName($FirstName);
        $this->setLastName($lastName);
    }


    public function getFullname(): string
    {
        return $this->getFirstName() . " " . $this->getLastName();
    }

    public function getAge(): int
    {
        return $this->getBirthDate()->diff(new \DateTime())->y;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName(string $FirstName): void
    {
        $this->FirstName = ucfirst($FirstName);
    }

    /**
     * @return \DateTime
     */
    public function getBirthDate(): \DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime $birthDate
     */
    public function setBirthDate(\DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName =ucfirst($lastName);
    }

    public function __toString():string
    {
        return $this->getFullname();
    }

    abstract public function getType():string;



}

