<?php
namespace App\EventListener;
 
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
 
class KernelExceptionListener
{
    private $router;
    private $redirectRouter = 'default_route';
 
    public function __construct(Router $router)
    {
        $this->router = $router;
    }
 
    public function onKernelResponse(ResponseEvent $event)
    {       
        
        if ($event->getResponse()->getStatusCode() == 404) {
            $url = $this->router->generate($this->redirectRouter);
            $response = new RedirectResponse($url);
            $event->setResponse($response);
            
        }
    }
}