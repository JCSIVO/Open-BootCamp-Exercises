package com.example.patron.comportamiento.Mediator;

public class ColegaConcreto2 extends Colega{



    @Override
    void recibe() {
        System.out.println("He recibido un mensaje, soy ColegaConcreto2");
    }

    @Override
    void envia() {
        System.out.println("Soy ColegacONCRETO2, envío un mensaje");
        mediator.reenvia(this);
    }
}
