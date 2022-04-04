<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Fichefrais;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;

/**
 * Description of FicheFraisFixtures
 *
 * @author quent
 */
class FicheFraisFixtures extends Fixture implements DependentFixtureInterface {
    //put your code here
    //Fiche n°1: idutilisateur:u1, mois: 202011, nbjustificatifs:2, idEtat:EN.
    //Fichen°2: idutilisateur:u1, mois: 202010, nbjustificatifs:1, MontantValide:1000, idEtat:EN
    
    public const FICHEFRAIS1_ID_REFERENCE = 'id-fichefrais1' ;
    public const FICHEFRAIS2_ID_REFERENCE = 'id-fichefrais2' ;
    
    public function load(ObjectManager $manager)//: void
    {
        // $product = new Product();
        // $manager->persist($product);
        $ficheFrais1 = new Fichefrais();
        $ficheFrais1->setIdutilisateur($this -> getReference (UtilisateurFixtures::UTILISATEUR_ID_REFERENCE ));
        $ficheFrais1->setMois("202011");
        $ficheFrais1->setNbjustificatifs(2);
        $ficheFrais1->setMontantvalide(0);
        $ficheFrais1->setIdetat($this -> getReference (EtatFixtures::ETAT_ID_REFERENCE ));
        
        $ficheFrais2 = new Fichefrais();
        $ficheFrais2->setIdutilisateur($this -> getReference (UtilisateurFixtures::UTILISATEUR_ID_REFERENCE ));
        $ficheFrais2->setMois("202010");
        $ficheFrais2->setNbjustificatifs(2);
        $ficheFrais2->setMontantvalide("1000");
        $ficheFrais2->setIdetat($this -> getReference (EtatFixtures::ETAT_ID_REFERENCE ));

        $manager->persist($ficheFrais1);
        $manager->persist($ficheFrais2);
        
        
        $manager->flush();
        
        $this -> addReference ( self :: FICHEFRAIS1_ID_REFERENCE , $ficheFrais1);
        $this -> addReference ( self :: FICHEFRAIS2_ID_REFERENCE , $ficheFrais2);
        
    }
    
        
    public function getDependencies ()
    {
        return array (
        UtilisateurFixtures:: class , EtatFixtures::class);
    }
}
