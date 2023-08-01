<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListAddressCcaa
 *
 * @ORM\Table(name="list_address_ccaa")
 * @ORM\Entity
 */
class ListAddressCcaa
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
     * @ORM\Column(name="ccaa", type="string", length=30, nullable=true)
     */
    private $ccaa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCcaa(): ?string
    {
        return $this->ccaa;
    }

    public function setCcaa(?string $ccaa): self
    {
        $this->ccaa = $ccaa;

        return $this;
    }


}
