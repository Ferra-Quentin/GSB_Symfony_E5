<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;
/**
 * Description of UtilisateurFixtures
 *
 * @author quent
 */
class UtilisateurFixtures extends Fixture implements DependentFixtureInterface{
    
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
        $unUser->setLaCategorie($this->getReference(DomaineCategorieFixtures::CATEGORIE1_ID_REFERENCE));

        
        
        $unUser2 = new Utilisateur();
        $unUser2->setId("QE");
        $unUser2->setNom("Ferra");
        $unUser2->setPrenom("Quentin");
        $unUser2->setAdresse("78 résidence du faubourg");
        $unUser2->setCp("62670");
        $unUser2->setVille("Mazingarbe");
        $date2 = new \DateTime("2019-10-01");
        $unUser2->setDateembauche($date2);
        $unUser2->setLaCategorie($this->getReference(DomaineCategorieFixtures::CATEGORIE2_ID_REFERENCE));

        $manager->persist($unUser);
        $manager->persist($unUser2);
        
        
        $manager->flush();
        
        $this -> addReference ( self :: UTILISATEUR_ID_REFERENCE , $unUser);
        
    }
    
    public function getDependencies(){
        return array(
        DomaineCategorieFixtures::class);
    }
}
