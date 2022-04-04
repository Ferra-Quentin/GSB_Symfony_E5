<?php

namespace App\Entity;

use App\Repository\DomaineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DomaineRepository::class)
 */
class Domaine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomdomaine;

    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class, inversedBy="lesdomaines")
     */
    private $lescategories;

    public function __construct()
    {
        $this->lescategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomdomaine(): ?string
    {
        return $this->nomdomaine;
    }

    public function setNomdomaine(string $nomdomaine): self
    {
        $this->nomdomaine = $nomdomaine;

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getLesCategories(): Collection
    {
        return $this->lescategories;
    }

    public function addLesCategory(Categorie $lesCategory): self
    {
        if (!$this->lescategories->contains($lesCategory)) {
            $this->lescategories[] = $lesCategory;
        }

        return $this;
    }

    public function removeLesCategory(Categorie $lesCategory): self
    {
        $this->lescategories->removeElement($lesCategory);

        return $this;
    }
}
