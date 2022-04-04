<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Lignefraishorsforfait;
use Doctrine\Common\DataFixtures\DependentFixtureInterface ;
/**
 * Description of LigneFraisHorsForfait
 *
 * @author quent
 */
class LigneFraisHorsForfaitFixtures extends Fixture implements DependentFixtureInterface {
    //put your code here
    public function load(ObjectManager $manager)//: void
    {
        // $product = new Product();
        // $manager->persist($product);
        $LigneFraisHorsForfait1 = new Lignefraishorsforfait();
        $LigneFraisHorsForfait1->setIdfiche($this -> getReference(FicheFraisFixtures::FICHEFRAIS1_ID_REFERENCE));
        $dateFraisHorsForfait = new \DateTime("2022-03-10");
        $LigneFraisHorsForfait1->setDate($dateFraisHorsForfait);
        $LigneFraisHorsForfait1->setLibelle('repas gastronomique');
        $LigneFraisHorsForfait1->setMontant(1000);
        
        $manager->persist($LigneFraisHorsForfait1);
        
        $manager->flush();
        
    }
    public function getDependencies ()
    {
        return array (
            FicheFraisFixtures:: class);
    }
}
