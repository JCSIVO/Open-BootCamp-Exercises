package com.example.patron.comportamiento.Mediator;

public class ColegaConcreto1 extends Colega{
    @Override
    void recibe() {
        System.out.println("He recibido un mensaje, soy ColegaConcreto1");
    }

    @Override
    void envia() {
        System.out.println("Soy ColegacONCRETO1, envío un mensaje");
        mediator.reenvia(this);
    }
}
