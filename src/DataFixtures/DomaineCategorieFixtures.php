<?php
namespace App\DataFixtures;

use App\Entity\Domaine;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DomaineCategorieFixtures extends Fixture{
    
    public const CATEGORIE1_ID_REFERENCE = 'id-categorie1' ;
    public const CATEGORIE2_ID_REFERENCE = 'id-categorie2' ;
    
    
    public function load(ObjectManager $manager)//: void
    {
        // $product = new Product();
        // $manager->persist($product);

        $uneCategorie1 = new Categorie();
        $uneCategorie1->setLibelleCategorie("visiteur");
        
        $uneCategorie2 = new Categorie();
        $uneCategorie2->setLibelleCategorie("comptable");
      
        $domaine1 = new Domaine();
        $domaine1->setNomDomaine("Administratif");
        
        $domaine2 = new Domaine();
        $domaine2->setNomDomaine("Exterieur");
        
        
        $uneCategorie2->addLesDomaine($domaine1);
        $domaine1->addLesCategory($uneCategorie2);
        
        $uneCategorie1->addLesDomaine($domaine2);
        $domaine2->addLesCategory($uneCategorie1);
        
        $manager->persist($uneCategorie1);
        $manager->persist($uneCategorie2);
        $manager->persist($domaine1);
        $manager->persist($domaine2);
        
        
        $manager->flush();
        
        $this -> addReference ( self :: CATEGORIE1_ID_REFERENCE , $uneCategorie1);
        $this -> addReference ( self :: CATEGORIE2_ID_REFERENCE , $uneCategorie2);
        
    }
}
?>
