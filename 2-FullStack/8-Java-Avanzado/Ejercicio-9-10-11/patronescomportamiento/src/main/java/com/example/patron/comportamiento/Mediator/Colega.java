package com.example.patron.comportamiento.Mediator;

abstract public class Colega {
    public Mediator mediator;


    public void setMediator(Mediator mediator) {
        this.mediator = mediator;
    }

    abstract void recibe();
    abstract void envia();
}
