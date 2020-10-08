<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 * @ApiResource()
 */
class Comment
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
    private $anonymous;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $published1;

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

    public function getAnonymous(): ?int
    {
        return $this->anonymous;
    }

    public function setAnonymous(int $anonymous): self
    {
        $this->anonymous = $anonymous;

        return $this;
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

    public function getPublished1(): ?\DateTimeInterface
    {
        return $this->published1;
    }

    public function setPublished1(\DateTimeInterface $published1): self
    {
        $this->published1 = $published1;

        return $this;
    }
}
