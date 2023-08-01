package com.example.singleton.Singleton;

public class Main {
    public static void main(String []args) {
        /*Singleton singleton = Singleton.getInstance();
        singleton.setContador(15);

        Singleton singleton2 = Singleton.getInstance();

        System.out.println("Valor: " + singleton.getContador() + " en memoria: " + singleton);
        System.out.println("Valor: " + singleton2.getContador() + " en memoria: " + singleton2);*/

        Aplicacion app = Aplicacion.getInstance(); // new Aplication()
        Aplicacion app2 = Aplicacion.getInstance(); // app2 = app;

        app.Run();
        app2.Run();

        System.out.println(app + " " + app2);

    }
}
