<?php

namespace App\Entity;

use App\Repository\AsignaturaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsignaturaRepository::class)]
class Asignatura
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $codigo;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombre;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombreIngles;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $creditos;

    #[ORM\ManyToOne(targetEntity: Grado::class, inversedBy: 'asignaturas')]
    #[ORM\JoinColumn(nullable: false)]
    private $grado;

    #[ORM\ManyToMany(targetEntity: Alumno::class, inversedBy: 'asignaturas')]
    #[ORM\JoinTable(name: 'alumnos_asignaturas')]
    #[ORM\JoinColumn(name: 'asignatura_id', referencedColumnName: 'id') ]
    #[ORM\InverseJoinColumn(name: 'alumno_id', referencedColumnName: 'id')]
    private $alumno;

    #[ORM\OneToMany(mappedBy: 'asignatura', targetEntity: Nota::class)]
    private $notas;

    public function __construct()
    {
        $this->alumno = new ArrayCollection();
        $this->notas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?int
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombreIngles(): ?string
    {
        return $this->nombreIngles;
    }

    public function setNombreIngles(string $nombreIngles): self
    {
        $this->nombreIngles = $nombreIngles;

        return $this;
    }

    public function getCreditos(): ?int
    {
        return $this->creditos;
    }

    public function setCreditos(?int $creditos): self
    {
        $this->creditos = $creditos;

        return $this;
    }

    public function getGrado(): ?Grado
    {
        return $this->grado;
    }

    public function setGrado(?Grado $grado): self
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * @return Collection|Alumno[]
     */
    public function getAlumno(): Collection
    {
        return $this->alumno;
    }

    public function addAlumno(Alumno $alumno): self
    {
        if (!$this->alumno->contains($alumno)) {
            $this->alumno[] = $alumno;
        }

        return $this;
    }

    public function removeAlumno(Alumno $alumno): self
    {
        $this->alumno->removeElement($alumno);

        return $this;
    }

    /**
     * @return Collection|Nota[]
     */
    public function getNotas(): Collection
    {
        return $this->notas;
    }

    public function addNota(Nota $nota): self
    {
        if (!$this->notas->contains($nota)) {
            $this->notas[] = $nota;
            $nota->setAsignatura($this);
        }

        return $this;
    }

    public function removeNota(Nota $nota): self
    {
        if ($this->notas->removeElement($nota)) {
            // set the owning side to null (unless already changed)
            if ($nota->getAsignatura() === $this) {
                $nota->setAsignatura(null);
            }
        }

        return $this;
    }
}
