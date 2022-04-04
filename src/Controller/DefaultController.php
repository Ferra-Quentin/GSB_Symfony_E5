<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/gestion", name="gestion")
     */
    public function gestion(): Response
    {
        return $this->render('pages/gestion.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/equipements", name="equipements")
     */
    public function equipements(): Response
    {
        return $this->render('pages/equipements.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     *@Route("/tout_les_utilisateur", name="tout_utilisateur")
    **/
    public function liste(): Response
        {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $lesInscription = $repo->utilisateur();
        return $this->render('pages/tout_les_users.html.twig',['listeUtilisateurs' => $lesInscription]);
        }
        
        /**
        *@Route("/listes_users_caruciens", name="users_cahors")
        **/
    public function listeCahors(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $cadurciens = $repo->cadurciens();
        return $this->render('pages/users_cahors.html.twig',['listeUtilisateurs' => $cadurciens]);
    }
    
    /**
        *@Route("/listes_users_ayant_frais", name="users_ayant_frais")
        **/
    public function ayantFrais(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $cadurciens = $repo->ayantFrais();
        return $this->render('pages/ayant_des_frais.html.twig',['listeUtilisateurs' => $cadurciens]);
    }
    
    /**
        *@Route("/listes_users_sans_frais", name="users_sans_frais")
        **/
    public function sansFrais(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $cadurciens = $repo->sansFrais();
        return $this->render('pages/sans_frais.html.twig',['listeUtilisateurs' => $cadurciens]);
    }
    
    /**
        *@Route("/nombre_frais", name="users_nombre_frais")
        **/
    public function nombreFrais(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $cadurciens = $repo->nombreFrais();
        return $this->render('pages/nombre_frais.html.twig',['listeUtilisateurs' => $cadurciens]);
    }
    
    /**
        *@Route("/domaines", name="domaines")
        **/
    public function domaines(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Domaine::class);
        $listeCatDom = $repo->findAll();
        return $this->render('pages/domaines.html.twig',['listeCatDom' => $listeCatDom]);
    }
        
}
