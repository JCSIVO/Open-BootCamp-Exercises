<?php

namespace App\Form\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AddNameFieldSubscriber implements EventSubscriberInterface{
    public static function getSubscribedEvents(){
        return [FormEvents::PRE_SET_DATA => 'preSetData'];
    }

    public function preSetData(FormEvent $event){
        $product = $event->getData();
        $form = $event->getForm();

        if(!$product || null == $product->getId()){
            $form->add('name', TextType::class);
        }
    }
}