<?php

namespace App\Entity;

use App\Repository\MentionRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MentionRepository::class)
 * @ApiResource()
 */
class Mention
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $wordingId;

    /**
     * @ORM\Column(type="integer")
     */
    private $stateId;

    /**
     * @ORM\Column(type="integer")
     */
    private $state;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWordingId(): ?int
    {
        return $this->wordingId;
    }

    public function setWordingId(int $wordingId): self
    {
        $this->wordingId = $wordingId;

        return $this;
    }

    public function getStateId(): ?int
    {
        return $this->stateId;
    }

    public function setStateId(int $stateId): self
    {
        $this->stateId = $stateId;

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
}
