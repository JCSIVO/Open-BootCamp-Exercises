package com.example.singleton.Singleton;


public class Aplicacion {
    private static Aplicacion aplicacion;
    boolean isRunnning = false;

    private Aplicacion() {}

    public static Aplicacion getInstance() {
        if(aplicacion == null) {
            aplicacion = new Aplicacion();
        }
        return aplicacion;
    }

    public void Run() {
        if (!isRunnning) {
            System.out.println("Arrancando!");
            isRunnning = true;
        } else {
            System.out.println("Ya estaba en ejecición");
        }
    }
}
