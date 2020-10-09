<?php

namespace App\Entity;

use App\Repository\PublicMessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PublicMessagePicture", mappedBy="publicMessage")
     */
    private $publicMessagePicture;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="publicMessage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function __construct()
    {
        $this->publicMessagePicture = new ArrayCollection();
    }

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

    /**
     * @return Collection|PublicMessagePicture[]
     */
    public function getPublicMessagePicture(): Collection
    {
        return $this->publicMessagePicture;
    }

    public function addPublicMessagePicture(PublicMessagePicture $publicMessagePicture): self
    {
        if (!$this->publicMessagePicture->contains($publicMessagePicture)) {
            $this->publicMessagePicture[] = $publicMessagePicture;
            $publicMessagePicture->setPublicMessage($this);
        }

        return $this;
    }

    public function removePublicMessagePicture(PublicMessagePicture $publicMessagePicture): self
    {
        if ($this->publicMessagePicture->contains($publicMessagePicture)) {
            $this->publicMessagePicture->removeElement($publicMessagePicture);
            // set the owning side to null (unless already changed)
            if ($publicMessagePicture->getPublicMessage() === $this) {
                $publicMessagePicture->setPublicMessage(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
