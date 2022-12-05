<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('contact/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'form with symfony'
        ]);
    }

    #[Route('/save', name: 'save')]
    public function save(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        //
        if($form->isValid()){
            return $this->render('contact/ok.html.twig', 
            [
                'form' => $form->createView(),
                'contact' => $contact,
                'title' => 'You sent data are the following'
            ]);
        }else{
            // ha fallado
            $this->addFlash('error', 'There are errors');
            return $this->render('contact/form.html.twig', [
                'form' => $form->createView(),
            'title' => 'form with errors'
            ]);
        }
        
    }
}
