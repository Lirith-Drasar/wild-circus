<?php

namespace App\Controller;

use App\Entity\Shows;
use App\Form\ShowsType;
use App\Repository\ShowsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class ShowsController extends AbstractController
{
    /**
     * @Route("/", name="shows_index", methods={"GET"})
     */
    public function index(ShowsRepository $showsRepository): Response
    {
        $this -> denyAccessUnlessGranted ( 'ROLE_ADMIN' );

        // or add an optional message - seen by developers
        $this -> denyAccessUnlessGranted ( 'ROLE_ADMIN' , null , 'User tried to access a page without having ROLE_ADMIN' );
        
        return $this->render('shows/index.html.twig', [
            'shows' => $showsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="shows_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $show = new Shows();
        $form = $this->createForm(ShowsType::class, $show);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($show);
            $entityManager->flush();

            return $this->redirectToRoute('shows_index');
        }

        return $this->render('shows/new.html.twig', [
            'show' => $show,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shows_show", methods={"GET"})
     */
    public function show(Shows $show): Response
    {
        return $this->render('shows/show.html.twig', [
            'show' => $show,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="shows_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Shows $show): Response
    {
        $form = $this->createForm(ShowsType::class, $show);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('shows_index');
        }

        return $this->render('shows/edit.html.twig', [
            'show' => $show,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shows_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Shows $show): Response
    {
        if ($this->isCsrfTokenValid('delete'.$show->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($show);
            $entityManager->flush();
        }

        return $this->redirectToRoute('shows_index');
    }
}
