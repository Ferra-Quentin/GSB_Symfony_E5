<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Fraisforfait;

/**
 * Description of FraisForfaitFixtures
 *
 * @author quent
 */
class FraisForfaitFixtures extends Fixture{
    public const FRAISFORFAIT1_ID_REFERENCE = 'id-fraisForfait1' ;
    public const FRAISFORFAIT2_ID_REFERENCE = 'id-fraisForfait2' ;
    public function load(ObjectManager $manager)//: void
    {
        // $product = new Product();
        // $manager->persist($product);
        $fraisForfait1 = new Fraisforfait();
        $fraisForfait1->setId("SE");
        $fraisForfait1->setLibelle("prix semaine");
        $fraisForfait1->setMontant(50);
        
        $fraisForfait2 = new Fraisforfait();
        $fraisForfait2->setId("WE");
        $fraisForfait2->setLibelle("prix week-end");
        $fraisForfait2->setMontant(80);

        $manager->persist($fraisForfait1);
        $manager->persist($fraisForfait2);
        
        
        $manager->flush();
        
        $this -> addReference ( self :: FRAISFORFAIT1_ID_REFERENCE , $fraisForfait1);
        $this -> addReference ( self :: FRAISFORFAIT2_ID_REFERENCE , $fraisForfait2);
        
    }
}
