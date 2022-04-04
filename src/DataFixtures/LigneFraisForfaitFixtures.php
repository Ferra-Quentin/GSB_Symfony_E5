<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lignefraisforfait;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;

/**
 * Description of LigneFraisforfaitFixtures
 *
 * @author quent
 */
class LigneFraisForfaitFixtures extends Fixture implements DependentFixtureInterface {
    //put your code here
    
    public function load(ObjectManager $manager)//: void
    {
        // $product = new Product();
        // $manager->persist($product);
        $LignefraisForfait1 = new Lignefraisforfait();
        $LignefraisForfait1->setIdfiche($this -> getReference(FicheFraisFixtures::FICHEFRAIS1_ID_REFERENCE));
        $LignefraisForfait1->setIdfraisforfait($this -> getReference(FraisForfaitFixtures::FRAISFORFAIT1_ID_REFERENCE));
        $LignefraisForfait1->setQuantite(12);
        
        $LignefraisForfait2 = new Lignefraisforfait();
        $LignefraisForfait2->setIdfiche($this -> getReference(FicheFraisFixtures::FICHEFRAIS2_ID_REFERENCE ));
        $LignefraisForfait2->setIdfraisforfait($this -> getReference(FraisForfaitFixtures::FRAISFORFAIT2_ID_REFERENCE ));
        $LignefraisForfait2->setQuantite(3);

        $manager->persist($LignefraisForfait1);
        $manager->persist($LignefraisForfait2);
        
        
        $manager->flush();
        
    }
    
    public function getDependencies ()
    {
        return array (
            FicheFraisFixtures:: class, FraisForfaitFixtures::class);
    }
}

