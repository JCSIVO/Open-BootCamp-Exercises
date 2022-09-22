package com.example.ejercicio222324.Ejercicio;

public class Main {
    public static void main(String[] args) {
        Coche[] arrayCoches = {
            new Coche("Audi"),
            new Coche("BMW"),
        };
        imprimirPrecioCoche(arrayCoches);
    }
    public static void imprimirPrecioCoche(Coche[] arrayCoches) {
        for (Coche coche : arrayCoches) {
            // if (coche.marca.equals("Audi"))
            // System.out.println("El precio del Audi es: " + 30000);
            // if (coche.marca.equals("BMW"))
            // System.out.println("El precio del BMW: " + 15000);
            System.out.println(coche.precioCoche());
        }
    }
}
