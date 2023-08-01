<?php

namespace App\Controller;

use App\Entity\Pupil;
use App\Form\PupilType;
use App\Repository\PupilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pupil')]
class PupilController extends AbstractController
{
    #[Route('/', name: 'pupil_index', methods: ['GET'])]
    public function index(PupilRepository $pupilRepository): Response
    {
        return $this->render('pupil/index.html.twig', [
            'pupils' => $pupilRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'pupil_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pupil = new Pupil();
        $form = $this->createForm(PupilType::class, $pupil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pupil);
            $entityManager->flush();

            return $this->redirectToRoute('pupil_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pupil/new.html.twig', [
            'pupil' => $pupil,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'pupil_show', methods: ['GET'])]
    public function show(Pupil $pupil): Response
    {
        return $this->render('pupil/show.html.twig', [
            'pupil' => $pupil,
        ]);
    }

    #[Route('/{id}/edit', name: 'pupil_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pupil $pupil, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PupilType::class, $pupil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('pupil_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pupil/edit.html.twig', [
            'pupil' => $pupil,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'pupil_delete', methods: ['POST'])]
    public function delete(Request $request, Pupil $pupil, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pupil->getId(), $request->request->get('_token'))) {
            $entityManager->remove($pupil);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pupil_index', [], Response::HTTP_SEE_OTHER);
    }
}
