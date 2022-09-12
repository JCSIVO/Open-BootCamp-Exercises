package com.example.patron.comportamiento.Mediator;

public class Main {
    public static void main(String[] args) {
        Mediator mediador = new MediadorConcreto();


        Colega colega1 = new ColegaConcreto1();
        Colega colega2 = new ColegaConcreto2();
        Colega colega3 = new ColegaConcreto3();

        mediador.registra(colega1);
        mediador.registra(colega2);
        mediador.registra(colega3);

        colega1.envia(); 
        colega2.envia();
        colega3.envia();
    }
}
