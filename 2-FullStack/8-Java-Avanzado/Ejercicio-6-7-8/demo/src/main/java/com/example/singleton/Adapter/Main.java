package com.example.singleton.Adapter;

public class Main {
    public static void main(String[] args) {
        Horno horno = new Horno();
        Lampara lampara = new Lampara();
        PowerAdapter lightAdapter = new PowerAdapter();

        enciende(horno);
        //enciende(lampara);
        enciende(lightAdapter);

        System.out.println(estaEncendido(horno));
        System.out.println(estaEncendido(lampara));
        System.out.println(estaEncendido(lightAdapter));
    }

    public static void enciende(Enchufable enchufable) {
        enchufable.enciende();
    }

    public static void apaga(Enchufable enchufable) {
        enchufable.apaga();
    }

    public static boolean estaEncendido(Enchufable enchufable) {
        return enchufable.estaEncendido();
    }
}
