<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_9243D6CE20332D99", columns={"code"})}, indexes={@ORM\Index(name="IDX_9243D6CE91A441CC", columns={"grade_id"})})
 * @ORM\Entity
 */
class Subject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="english_name", type="string", length=255, nullable=false)
     */
    private $englishName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="credects", type="integer", nullable=true)
     */
    private $credects;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pupil", inversedBy="subject")
     * @ORM\JoinTable(name="pupils_subjects",
     *   joinColumns={
     *     @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pupil_id", referencedColumnName="id")
     *   }
     * )
     */
    private $pupil;

    /**
     * @ORM\ManyToOne(targetEntity=Grade::class, inversedBy="subjects")
     * @ORM\JoinColumn(nullable=false)
     */
    private $grade;

    /**
     * @ORM\OneToMany(targetEntity=Note::class, mappedBy="subject")
     */
    private $notes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pupil = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
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

    public function getEnglishName(): ?string
    {
        return $this->englishName;
    }

    public function setEnglishName(string $englishName): self
    {
        $this->englishName = $englishName;

        return $this;
    }

    public function getCredects(): ?int
    {
        return $this->credects;
    }

    public function setCredects(?int $credects): self
    {
        $this->credects = $credects;

        return $this;
    }

    /**
     * @return Collection|Pupil[]
     */
    public function getPupil(): Collection
    {
        return $this->pupil;
    }

    public function addPupil(Pupil $pupil): self
    {
        if (!$this->pupil->contains($pupil)) {
            $this->pupil[] = $pupil;
        }

        return $this;
    }

    public function removePupil(Pupil $pupil): self
    {
        if ($this->pupil->contains($pupil)) {
            $this->pupil->removeElement($pupil);
        }

        return $this;
    }

    public function getGrade(): ?Grade
    {
        return $this->grade;
    }

    public function setGrade(?Grade $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * @return Collection|Note[]
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes[] = $note;
            $note->setSubject($this);
        }

        return $this;
    }

    public function removeNote(Note $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getSubject() === $this) {
                $note->setSubject(null);
            }
        }

        return $this;
    }

}
