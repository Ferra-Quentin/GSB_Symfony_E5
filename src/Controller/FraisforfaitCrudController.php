<?php

namespace App\Controller;

use App\Entity\Fraisforfait;
use App\Form\FraisforfaitType;
use App\Repository\FraisforfaitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fraisforfait")
 */
class FraisforfaitCrudController extends AbstractController
{
    /**
     * @Route("/", name="fraisforfait_crud_index", methods={"GET"})
     */
    public function index(FraisforfaitRepository $fraisforfaitRepository): Response
    {
        return $this->render('fraisforfait_crud/index.html.twig', [
            'fraisforfaits' => $fraisforfaitRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="fraisforfait_crud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fraisforfait = new Fraisforfait();
        $form = $this->createForm(FraisforfaitType::class, $fraisforfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fraisforfait);
            $entityManager->flush();

            return $this->redirectToRoute('fraisforfait_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fraisforfait_crud/new.html.twig', [
            'fraisforfait' => $fraisforfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="fraisforfait_crud_show", methods={"GET"})
     */
    public function show(Fraisforfait $fraisforfait): Response
    {
        return $this->render('fraisforfait_crud/show.html.twig', [
            'fraisforfait' => $fraisforfait,
        ]);
    }

    /**
     * @Route("/modifier/{id}", name="fraisforfait_crud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Fraisforfait $fraisforfait): Response
    {
        $form = $this->createForm(FraisforfaitType::class, $fraisforfait);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fraisforfait_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fraisforfait_crud/edit.html.twig', [
            'fraisforfait' => $fraisforfait,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/supprimer/{id}", name="fraisforfait_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Fraisforfait $fraisforfait): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fraisforfait->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fraisforfait);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fraisforfait_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
