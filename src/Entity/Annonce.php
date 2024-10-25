<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $puplicationDate = null;

    #[ORM\Column]
    private ?int $nbrLike = null;

    #[ORM\ManyToOne(inversedBy: 'Annonce')]
    private ?Agence $agence = null;

    #[ORM\ManyToOne(inversedBy: 'annonces')]
    private ?Agence $Agence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPuplicationDate(): ?\DateTimeInterface
    {
        return $this->puplicationDate;
    }

    public function setPuplicationDate(\DateTimeInterface $puplicationDate): static
    {
        $this->puplicationDate = $puplicationDate;

        return $this;
    }

    public function getNbrLike(): ?int
    {
        return $this->nbrLike;
    }

    public function setNbrLike(int $nbrLike): static
    {
        $this->nbrLike = $nbrLike;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): static
    {
        $this->agence = $agence;

        return $this;
    }
}
