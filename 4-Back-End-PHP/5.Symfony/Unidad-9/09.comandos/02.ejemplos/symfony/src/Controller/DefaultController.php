<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'default')]
    public function index(LoggerInterface $logger): Response
    {
        $logger->info('I just got a logger');
        $logger->error('An error ocurred');
        $logger->critical('I left the oven on!',[
            'cause' => 'in_hurry'
        ]);
        // return response
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
