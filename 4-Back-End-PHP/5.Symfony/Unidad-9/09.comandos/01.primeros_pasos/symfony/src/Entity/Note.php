<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="IDX_C8D03E0DFC28E5EE", columns={"pupil_id"}), @ORM\Index(name="IDX_C8D03E0DC5C70C5B", columns={"subject_id"})})
 * @ORM\Entity
 */
class Note
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
     * @ORM\Column(name="n_convocation", type="integer", nullable=false)
     */
    private $nConvocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var \Pupil
     *
     * @ORM\ManyToOne(targetEntity="Pupil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pupil_id", referencedColumnName="id")
     * })
     */
    private $pupil;

    /**
     * @ORM\ManyToOne(targetEntity=Subject::class, inversedBy="notes")
     */
    private $subject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNConvocation(): ?int
    {
        return $this->nConvocation;
    }

    public function setNConvocation(int $nConvocation): self
    {
        $this->nConvocation = $nConvocation;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getPupil(): ?Pupil
    {
        return $this->pupil;
    }

    public function setPupil(?Pupil $pupil): self
    {
        $this->pupil = $pupil;

        return $this;
    }

    public function getSubject(): ?Subject
    {
        return $this->subject;
    }

    public function setSubject(?Subject $subject): self
    {
        $this->subject = $subject;

        return $this;
    }


}
