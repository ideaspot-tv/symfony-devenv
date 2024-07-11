<?php

namespace App\Entity;

use App\Repository\CookieFortuneSayingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CookieFortuneSayingRepository::class)]
class CookieFortuneSaying
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $saying = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSaying(): ?string
    {
        return $this->saying;
    }

    public function setSaying(string $saying): static
    {
        $this->saying = $saying;

        return $this;
    }
}
