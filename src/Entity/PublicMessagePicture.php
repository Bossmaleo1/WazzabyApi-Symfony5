<?php

namespace App\Entity;

use App\Repository\PublicMessagePictureRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=PublicMessagePictureRepository::class)
 * @ApiResource()
 */
class PublicMessagePicture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $wording;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $extension;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PublicMessage", inversedBy="publicMessagePicture")
     * @ORM\JoinColumn(nullable=false)
     */
    private $publicMessage;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    public function getPublicMessage(): ?PublicMessage
    {
        return $this->publicMessage;
    }

    public function setPublicMessage(?PublicMessage $publicMessage): self
    {
        $this->publicMessage = $publicMessage;

        return $this;
    }
}
