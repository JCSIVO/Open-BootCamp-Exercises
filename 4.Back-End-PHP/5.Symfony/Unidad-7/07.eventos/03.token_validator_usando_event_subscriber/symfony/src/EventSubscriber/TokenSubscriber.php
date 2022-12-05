<?php
// src/EventSubscriber/TokenSubscriber.php
namespace App\EventSubscriber;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;


use App\Services\TokenValidatorService;

class TokenSubscriber implements EventSubscriberInterface
{
    private $tokenValidatorService;

    public function __construct(TokenValidatorService $tokenValidatorService)
    {
        $this->tokenValidatorService = $tokenValidatorService;
    }
    // For example, kernel.controller.
    public static function getSubscribedEvents()
    {
        return [
           'kernel.request' => 'onKernelRequest',
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        // We get the petition token
        // $token = $event->getRequest()->query->get('token');
        $token = $event->getRequest()->headers->get('Authorization');
        // We use the service that tells us if the token is valid or not to launch an AccessDeniedHttpException
        // in case it's not right
        if (!$this->tokenValidatorService->validate($token)){
            throw new AccessDeniedHttpException('Token inválido.');
        }
    }
}