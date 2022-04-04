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
        
        $uneCategorie3 = new Categorie();
        $uneCategorie3->setLibelleCategorie("Directeur branche developpement");
        
        $uneCategorie4 = new Categorie();
        $uneCategorie4->setLibelleCategorie("Directeur editorial");
        
        $uneCategorie5 = new Categorie();
        $uneCategorie5->setLibelleCategorie("Moderateur");
        
        $uneCategorie6 = new Categorie();
        $uneCategorie6->setLibelleCategorie("Support");
      
        $domaine1 = new Domaine();
        $domaine1->setNomDomaine("Administratif");
        
        $domaine2 = new Domaine();
        $domaine2->setNomDomaine("Exterieur");
        
        $domaine3 = new Domaine();
        $domaine3->setNomDomaine("Editeur");
        
        $domaine4 = new Domaine();
        $domaine4->setNomDomaine("Directeur");
        
        
        $uneCategorie2->addLesDomaine($domaine1);
        $uneCategorie2->addLesDomaine($domaine3);
        
        $domaine1->addLesCategory($uneCategorie2);
        $domaine1->addLesCategory($uneCategorie5);
        $domaine1->addLesCategory($uneCategorie6);
        
        
        $domaine4->addLesCategory($uneCategorie3);
        $domaine4->addLesCategory($uneCategorie4);
        
        $uneCategorie1->addLesDomaine($domaine2);
        $domaine2->addLesCategory($uneCategorie1);
        
        $manager->persist($uneCategorie1);
        $manager->persist($uneCategorie2);
        $manager->persist($uneCategorie3);
        $manager->persist($uneCategorie4);
        $manager->persist($uneCategorie5);
        $manager->persist($uneCategorie6);
        $manager->persist($domaine1);
        $manager->persist($domaine2);
        $manager->persist($domaine3);
        $manager->persist($domaine4);
        
        
        $manager->flush();
        
        $this -> addReference ( self :: CATEGORIE1_ID_REFERENCE , $uneCategorie1);
        $this -> addReference ( self :: CATEGORIE2_ID_REFERENCE , $uneCategorie2);
        
    }
}
?>
