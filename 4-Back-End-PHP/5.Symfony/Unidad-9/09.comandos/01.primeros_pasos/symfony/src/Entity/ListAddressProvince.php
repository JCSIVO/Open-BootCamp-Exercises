<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListAddressProvince
 *
 * @ORM\Table(name="list_address_province", indexes={@ORM\Index(name="ccaa", columns={"ccaa_id"})})
 * @ORM\Entity
 */
class ListAddressProvince
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
     * @var string|null
     *
     * @ORM\Column(name="province", type="string", length=45, nullable=true)
     */
    private $province;

    /**
     * @var \ListAddressCcaa
     *
     * @ORM\ManyToOne(targetEntity="ListAddressCcaa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ccaa_id", referencedColumnName="id")
     * })
     */
    private $ccaa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(?string $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getCcaa(): ?ListAddressCcaa
    {
        return $this->ccaa;
    }

    public function setCcaa(?ListAddressCcaa $ccaa): self
    {
        $this->ccaa = $ccaa;

        return $this;
    }


}
