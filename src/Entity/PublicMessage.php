<?php

namespace App\Entity;

use App\Repository\PublicMessageRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=PublicMessageRepository::class)
 * @ApiResource()
 */
class PublicMessage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $published;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $wording;

    /**
     * @ORM\Column(type="integer")
     */
    private $state;

    /**
     * @ORM\Column(type="integer")
     */
    private $anonymous;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublished(): ?\DateTimeInterface
    {
        return $this->published;
    }

    public function setPublished(\DateTimeInterface $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getWording(): ?string
    {
        return $this->wording;
    }

    public function setWording(string $wording): self
    {
        $this->wording = $wording;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getAnonymous(): ?int
    {
        return $this->anonymous;
    }

    public function setAnonymous(int $anonymous): self
    {
        $this->anonymous = $anonymous;

        return $this;
    }
}
