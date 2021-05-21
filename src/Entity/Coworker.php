<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Coworker
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Length(min=4)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(min=4)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string")
     * 
     * @Assert\NotBlank()
     * @Assert\Email()
     * @Assert\Length(min=10)
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     * 
     * @Assert\NotBlank()
     * @Assert\Length(min=5)
     */
    private $password;

    /**
     * @Assert\IsFalse(message="The email should not be contained inside the password")
     */
    public function isValidValues(): bool
    {
        return $this->email === $this->password;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}