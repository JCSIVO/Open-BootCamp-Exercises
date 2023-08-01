<?php

namespace App\Entity;

use App\Repository\NotaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotaRepository::class)]
class Nota
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $nConvocatoria;

    #[ORM\Column(type: 'date')]
    private $fecha;

    #[ORM\Column(type: 'float', precision: 10, scale:10 )]
    private $nota;

    #[ORM\ManyToOne(targetEntity: Asignatura::class, inversedBy: 'notas')]
    private $asignatura;

    #[ORM\ManyToOne(targetEntity: Alumno::class, inversedBy: 'notas')]
    private $alumno;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNConvocatoria(): ?int
    {
        return $this->nConvocatoria;
    }

    public function setNConvocatoria(int $nConvocatoria): self
    {
        $this->nConvocatoria = $nConvocatoria;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getNota(): ?float
    {
        return $this->nota;
    }

    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }

    public function getAsignatura(): ?Asignatura
    {
        return $this->asignatura;
    }

    public function setAsignatura(?Asignatura $asignatura): self
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    public function getAlumno(): ?Alumno
    {
        return $this->alumno;
    }

    public function setAlumno(?Alumno $alumno): self
    {
        $this->alumno = $alumno;

        return $this;
    }
}
