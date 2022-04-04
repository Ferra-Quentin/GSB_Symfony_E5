<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libellecategorie;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="lacategorie")
     */
    private $la_categorie;

    /**
     * @ORM\ManyToMany(targetEntity=Domaine::class, mappedBy="lescategories")
     */
    private $les_domaines;

    public function __construct()
    {
        $this->la_categorie = new ArrayCollection();
        $this->les_domaines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCategorie(): ?string
    {
        return $this->libellecategorie;
    }

    public function setLibelleCategorie(?string $libellecategorie): self
    {
        $this->libellecategorie = $libellecategorie;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getLaCategorie(): Collection
    {
        return $this->lacategorie;
    }

    public function addLaCategorie(Utilisateur $laCategorie): self
    {
        if (!$this->lacategorie->contains($laCategorie)) {
            $this->lacategorie[] = $laCategorie;
            $laCategorie->setLaCategorie($this);
        }

        return $this;
    }

    public function removeLaCategorie(Utilisateur $laCategorie): self
    {
        if ($this->lacategorie->removeElement($laCategorie)) {
            // set the owning side to null (unless already changed)
            if ($laCategorie->getLaCategorie() === $this) {
                $laCategorie->setLaCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Domaine[]
     */
    public function getLesDomaines(): Collection
    {
        return $this->les_domaines;
    }

    public function addLesDomaine(Domaine $lesDomaine): self
    {
        if (!$this->les_domaines->contains($lesDomaine)) {
            $this->les_domaines[] = $lesDomaine;
            $lesDomaine->addLesCategory($this);
        }

        return $this;
    }

    public function removeLesDomaine(Domaine $lesDomaine): self
    {
        if ($this->lesdomaines->removeElement($lesDomaine)) {
            $lesDomaine->removeLesCategory($this);
        }

        return $this;
    }
}
