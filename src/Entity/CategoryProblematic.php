<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CategoryProblematicRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryProblematicRepository::class)
 * @ApiResource()
 */
class CategoryProblematic
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
    private $language;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Problematic", mappedBy="category")
     */
    private $problematic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    public function __construct()
    {
        $this->problematic = new ArrayCollection();
    }

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return Collection|Problematic[]
     */
    public function getProblematic(): Collection
    {
        return $this->problematic;
    }

    public function addProblematic(Problematic $problematic): self
    {
        if (!$this->problematic->contains($problematic)) {
            $this->problematic[] = $problematic;
            $problematic->setCategory($this);
        }

        return $this;
    }

    public function removeProblematic(Problematic $problematic): self
    {
        if ($this->problematic->contains($problematic)) {
            $this->problematic->removeElement($problematic);
            // set the owning side to null (unless already changed)
            if ($problematic->getCategory() === $this) {
                $problematic->setCategory(null);
            }
        }

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}
