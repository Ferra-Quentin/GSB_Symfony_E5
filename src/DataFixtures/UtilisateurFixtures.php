<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
/**
 * Description of UtilisateurFixtures
 *
 * @author quent
 */
class UtilisateurFixtures extends Fixture {
    
    public const UTILISATEUR_ID_REFERENCE = 'id-user' ;
    
    public function load(ObjectManager $manager)//: void
    {
        // $product = new Product();
        // $manager->persist($product);
        $unUser = new Utilisateur();
        $unUser->setId("u1");
        $unUser->setNom("Didier");
        $unUser->setPrenom("Terry");
        $unUser->setAdresse("25, rue du jambon");
        $unUser->setCp("62999");
        $unUser->setVille("Leport");
        $date = new \DateTime("2019-10-01");
        $unUser->setDateembauche($date);

        $manager->persist($unUser);
        
        
        $manager->flush();
        
        $this -> addReference ( self :: UTILISATEUR_ID_REFERENCE , $unUser);
        
    }
}
