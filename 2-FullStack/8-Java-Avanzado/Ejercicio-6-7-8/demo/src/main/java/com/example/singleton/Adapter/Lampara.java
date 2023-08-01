package com.example.singleton.Adapter;

public class Lampara implements Enchufable {
    boolean encendido = false;

    @Override
    public void enciende(){
        encendido = true;
        System.out.println("Lampara encendido");
    }

    @Override
    public void apaga(){
        encendido = false;
        System.out.println("Lampara Apagado");
    }

    @Override
    public boolean estaEncendido(){
        return encendido;
    }
}
