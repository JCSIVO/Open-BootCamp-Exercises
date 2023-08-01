<?php

namespace App\Entity;

use App\Repository\SubjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubjectRepository::class)]
class Subject
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToOne(targetEntity: Course::class, inversedBy: 'subjects')]
    #[ORM\JoinColumn(nullable: false)]
    private $course;

    #[ORM\ManyToMany(targetEntity: Pupil::class, mappedBy: 'subjects')]
    private $pupils;

    public function __construct()
    {
        $this->pupils = new ArrayCollection();
    }

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

    public function getCourse(): ?Course
    {
        return $this->course;
    }

    public function setCourse(?Course $course): self
    {
        $this->course = $course;

        return $this;
    }

    /**
     * @return Collection|Pupil[]
     */
    public function getPupils(): Collection
    {
        return $this->pupils;
    }

    public function addPupil(Pupil $pupil): self
    {
        if (!$this->pupils->contains($pupil)) {
            $this->pupils[] = $pupil;
            $pupil->addSubject($this);
        }

        return $this;
    }

    public function removePupil(Pupil $pupil): self
    {
        if ($this->pupils->removeElement($pupil)) {
            $pupil->removeSubject($this);
        }

        return $this;
    }
}
