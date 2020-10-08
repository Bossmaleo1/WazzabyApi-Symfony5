<?php

namespace App\Entity;

use App\Repository\PrivateMessageRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=PrivateMessageRepository::class)
 * @ApiResource()
 */
class PrivateMessage
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
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $published;

    /**
     * @ORM\Column(type="integer")
     */
    private $transmitterAnonymous;

    /**
     * @ORM\Column(type="integer")
     */
    private $receiveranonymous;

    /**
     * @ORM\Column(type="integer")
     */
    private $readMention;

    /**
     * @ORM\Column(type="datetime")
     */
    private $readDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
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

    public function getTransmitterId(): ?int
    {
        return $this->transmitterId;
    }

    public function setTransmitterId(int $transmitterId): self
    {
        $this->transmitterId = $transmitterId;

        return $this;
    }

    public function getReceiverId(): ?int
    {
        return $this->receiverId;
    }

    public function setReceiverId(int $receiverId): self
    {
        $this->receiverId = $receiverId;

        return $this;
    }

    public function getTransmitterAnonymous(): ?int
    {
        return $this->transmitterAnonymous;
    }

    public function setTransmitterAnonymous(int $transmitterAnonymous): self
    {
        $this->transmitterAnonymous = $transmitterAnonymous;

        return $this;
    }

    public function getReceiveranonymous(): ?int
    {
        return $this->receiveranonymous;
    }

    public function setReceiveranonymous(int $receiveranonymous): self
    {
        $this->receiveranonymous = $receiveranonymous;

        return $this;
    }

    public function getReadMention(): ?int
    {
        return $this->readMention;
    }

    public function setReadMention(int $readMention): self
    {
        $this->readMention = $readMention;

        return $this;
    }

    public function getReadDate(): ?\DateTimeInterface
    {
        return $this->readDate;
    }

    public function setReadDate(\DateTimeInterface $readDate): self
    {
        $this->readDate = $readDate;

        return $this;
    }
}
