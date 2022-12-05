<?php

namespace App\EventListener;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\User;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginListener
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        // obtenemos el usuario
        $user = $event->getAuthenticationToken()->getUser();
        // actualizamos el campo
        $user->setLastLogin(new \DateTime());
        // persistimos
        $this->em->persist($user);
        $this->em->flush();
    }
}
