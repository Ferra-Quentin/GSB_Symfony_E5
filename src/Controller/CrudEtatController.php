<?php

namespace App\Controller;

use App\Entity\Etat;
use App\Form\Etat1Type;
use App\Repository\EtatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/etat")
 */
class CrudEtatController extends AbstractController
{
    /**
     * @Route("/list", name="crud_etat_index", methods={"GET"})
     */
    public function index(EtatRepository $etatRepository): Response
    {
        return $this->render('crud_etat/lesEtats.html.twig', [
            'etats' => $etatRepository->findAll(),
        ]);
    }

    /**
     * @Route("/nouveau", name="crud_etat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $etat = new Etat();
        $form = $this->createForm(Etat1Type::class, $etat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($etat);
            $entityManager->flush();

            return $this->redirectToRoute('crud_etat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud_etat/new.html.twig', [
            'etat' => $etat,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/voir/{id}", name="crud_etat_show", methods={"GET"})
     */
    public function show(Etat $etat): Response
    {
        return $this->render('crud_etat/show.html.twig', [
            'etat' => $etat,
        ]);
    }

    /**
     * @Route("/modifier/{id}", name="crud_etat_edit", methods={"GET","POST"},defaults={"id"="EN"})
     */
    public function edit(Request $request, Etat $etat): Response
    {
        $form = $this->createForm(Etat1Type::class, $etat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('crud_etat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud_etat/edit.html.twig', [
            'etat' => $etat,
            'form' => $form,
        ]);
    }

    /**
     * @Route("remove/{id}", name="crud_etat_delete", methods={"POST"})
     */
    public function delete(Request $request, Etat $etat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($etat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('crud_etat_index', [], Response::HTTP_SEE_OTHER);
    }
}
