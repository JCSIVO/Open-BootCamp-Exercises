<?php

namespace App\EventListener;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Contracts\EventDispatcher\Event;

class UserRegisteredListener extends Event
{
    private $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function onUserRegistered(Event $event)
    {
        $domainName = substr(strrchr($event->getRegisteredUser()->getEmail(), "@"), 1);
        $em = $this->entityManager;
        
        if ('admin.com' === $domainName) {
            $user = $event->getRegisteredUser()->setRole('ROLE_ADMIN');
        } else {
            $user = $event->getRegisteredUser()->setRole('ROLE_USER');
        }
        
        $em->persist($user);
        $em->flush();
    }
}