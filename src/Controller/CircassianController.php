<?php

namespace App\Controller;

use App\Entity\Circassian;
use App\Form\CircassianType;
use App\Repository\CircassianRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/circassian")
 */
class CircassianController extends AbstractController
{
    /**
     * @Route("/", name="circassian_index", methods={"GET"})
     */
    public function index(CircassianRepository $circassianRepository): Response
    {
        return $this->render('circassian/index.html.twig', [
            'circassians' => $circassianRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="circassian_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $circassian = new Circassian();
        $form = $this->createForm(CircassianType::class, $circassian);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($circassian);
            $entityManager->flush();

            return $this->redirectToRoute('circassian_index');
        }

        return $this->render('circassian/new.html.twig', [
            'circassian' => $circassian,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="circassian_show", methods={"GET"})
     */
    public function show(Circassian $circassian): Response
    {
        return $this->render('circassian/show.html.twig', [
            'circassian' => $circassian,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="circassian_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Circassian $circassian): Response
    {
        $form = $this->createForm(CircassianType::class, $circassian);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('circassian_index');
        }

        return $this->render('circassian/edit.html.twig', [
            'circassian' => $circassian,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="circassian_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Circassian $circassian): Response
    {
        if ($this->isCsrfTokenValid('delete'.$circassian->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($circassian);
            $entityManager->flush();
        }

        return $this->redirectToRoute('circassian_index');
    }
}
