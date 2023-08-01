<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
// constraints
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(
        message: 'The field must not be empty'
    )]
    #[Assert\Length(
        min: 8, 
        minMessage: "It must contain at least '{{ limit }}' characters."
    )]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(
        message: 'The field must not be empty'
    )]
    #[Assert\Email(
        message: "The field '{{ value }}' must be a valid email address."
    )]
    private $email;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(
        message: 'The field must not be empty'
    )]
    private $title;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(
        message: 'The field must not be empty'
    )]
    private $message;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(
        message: 'The field must not be empty'
    )]
    private $area;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
}
