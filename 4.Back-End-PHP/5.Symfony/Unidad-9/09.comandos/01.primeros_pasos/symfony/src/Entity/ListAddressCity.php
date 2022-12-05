<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListAddressCity
 *
 * @ORM\Table(name="list_address_city", indexes={@ORM\Index(name="address_province", columns={"province"})})
 * @ORM\Entity
 */
class ListAddressCity
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
     * @var int|null
     *
     * @ORM\Column(name="cp", type="integer", nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=500, nullable=true)
     */
    private $city;

    /**
     * @var \ListAddressProvince
     *
     * @ORM\ManyToOne(targetEntity="ListAddressProvince")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="province", referencedColumnName="id")
     * })
     */
    private $province;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCp(): ?int
    {
        return $this->cp;
    }

    public function setCp(?int $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getProvince(): ?ListAddressProvince
    {
        return $this->province;
    }

    public function setProvince(?ListAddressProvince $province): self
    {
        $this->province = $province;

        return $this;
    }


}
