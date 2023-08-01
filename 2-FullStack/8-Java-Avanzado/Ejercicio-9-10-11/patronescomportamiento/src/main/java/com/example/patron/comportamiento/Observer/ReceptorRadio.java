package com.example.patron.comportamiento.Observer;

public class ReceptorRadio implements Receptor{
    @Override
    public void recibe() {
        System.out.println("Señal recibida en radio");
    }
}
