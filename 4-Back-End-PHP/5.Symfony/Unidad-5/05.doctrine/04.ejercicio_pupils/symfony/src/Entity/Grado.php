<?php

namespace App\Entity;

use App\Repository\GradoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GradoRepository::class)]
class Grado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nombre;

    #[ORM\OneToMany(mappedBy: 'grado', targetEntity: Asignatura::class, orphanRemoval: true)]
    private $asignaturas;

    #[ORM\OneToMany(mappedBy: 'grado', targetEntity: Alumno::class, orphanRemoval: true)]
    private $alumnos;

    public function __construct()
    {
        $this->asignaturas = new ArrayCollection();
        $this->alumnos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Asignatura[]
     */
    public function getAsignaturas(): Collection
    {
        return $this->asignaturas;
    }

    public function addAsignatura(Asignatura $asignatura): self
    {
        if (!$this->asignaturas->contains($asignatura)) {
            $this->asignaturas[] = $asignatura;
            $asignatura->setGrado($this);
        }

        return $this;
    }

    public function removeAsignatura(Asignatura $asignatura): self
    {
        if ($this->asignaturas->removeElement($asignatura)) {
            // set the owning side to null (unless already changed)
            if ($asignatura->getGrado() === $this) {
                $asignatura->setGrado(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Alumno[]
     */
    public function getAlumnos(): Collection
    {
        return $this->alumnos;
    }

    public function addAlumno(Alumno $alumno): self
    {
        if (!$this->alumnos->contains($alumno)) {
            $this->alumnos[] = $alumno;
            $alumno->setGrado($this);
        }

        return $this;
    }

    public function removeAlumno(Alumno $alumno): self
    {
        if ($this->alumnos->removeElement($alumno)) {
            // set the owning side to null (unless already changed)
            if ($alumno->getGrado() === $this) {
                $alumno->setGrado(null);
            }
        }

        return $this;
    }
}
