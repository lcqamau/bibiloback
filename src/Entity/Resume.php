<?php

namespace App\Entity;

use App\Repository\ResumeRepository;
use Doctrine\DBAL\Types\Types;
use ApiPlatform\Metadata\ApiResource as MetadataApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResumeRepository::class)]
#[MetadataApiResource()]
class Resume
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'resumes')]
    private ?Livre $livre_id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivreId(): ?Livre
    {
        return $this->livre_id;
    }

    public function setLivreId(?Livre $livre_id): static
    {
        $this->livre_id = $livre_id;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }
}
