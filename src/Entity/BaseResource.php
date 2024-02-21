<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
class BaseResource
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $baseProperty = null;

    public function getBaseProperty(): ?string
    {
        return $this->baseProperty;
    }

    public function setBaseProperty(?string $baseProperty): static
    {
        $this->baseProperty = $baseProperty;

        return $this;
    }
}
