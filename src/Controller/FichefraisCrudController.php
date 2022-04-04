<?php

namespace App\Controller;

use App\Entity\Fichefrais;
use App\Form\FichefraisType;
use App\Repository\FichefraisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fichefrais")
 */
class FichefraisCrudController extends AbstractController
{
    /**
     * @Route("/", name="fichefrais_crud_index", methods={"GET"})
     */
    public function index(FichefraisRepository $fichefraisRepository): Response
    {
        return $this->render('fichefrais_crud/index.html.twig', [
            'fichefrais' => $fichefraisRepository->findAll(),
        ]);
    }

    /**
     * @Route("/nouveau", name="fichefrais_crud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fichefrai = new Fichefrais();
        $form = $this->createForm(FichefraisType::class, $fichefrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fichefrai);
            $entityManager->flush();

            return $this->redirectToRoute('fichefrais_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fichefrais_crud/new.html.twig', [
            'fichefrai' => $fichefrai,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="fichefrais_crud_show", methods={"GET"})
     */
    public function show(Fichefrais $fichefrai): Response
    {
        return $this->render('fichefrais_crud/show.html.twig', [
            'fichefrai' => $fichefrai,
        ]);
    }

    /**
     * @Route("/Modifier/{id}", name="fichefrais_crud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Fichefrais $fichefrai): Response
    {
        $form = $this->createForm(FichefraisType::class, $fichefrai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fichefrais_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fichefrais_crud/edit.html.twig', [
            'fichefrai' => $fichefrai,
            'form' => $form,
        ]);
    }

    /**
     * @Route("supprimer/{id}", name="fichefrais_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Fichefrais $fichefrai): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fichefrai->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fichefrai);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fichefrais_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
