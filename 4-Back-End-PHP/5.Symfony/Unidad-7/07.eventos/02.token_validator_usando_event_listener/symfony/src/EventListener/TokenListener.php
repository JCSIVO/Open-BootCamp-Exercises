<?php
// src/EventListener/TokenListener.php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

use App\Services\TokenValidatorService;

class TokenListener
{
    private $tokenValidatorService;

    public function __construct(TokenValidatorService $tokenValidatorService)
    {
        $this->tokenValidatorService = $tokenValidatorService;
    }

    public function onKernelController(ControllerEvent $event)
    {
        // We get the petition token
        // $token = $event->getRequest()->query->get('token');
        $token = $event->getRequest()->headers->get('Authorization');
        // We use the service that tells us if the token is valid or not to launch an AccessDeniedHttpException
        // in case it is not correct
        if (!$this->tokenValidatorService->validate($token)){
            throw new AccessDeniedHttpException('Sin Autorización. Token inválido.');
        }
    }
}