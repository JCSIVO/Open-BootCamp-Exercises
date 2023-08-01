package com.example.ejercicio222324.EjercicioResuelto;

public class Main {
    public static void main(String[] args) {
        System.out.println("\nInicio del programa");
        System.out.println("-------------------\n");

        Coche coche = new Coche("Audi", "A4", 5);
        coche.acelerar();
        coche.acelerar();
        System.out.println(coche);

        // Exportacion de los datos
        coche.exportarDatos();

        // Extensiones
        CocheGasolina cocheGasolina = new CocheGasolina("BMW", "X6", 3);
        cocheGasolina.cargarCombustible();
        cocheGasolina.acelerar();
        cocheGasolina.acelerar();
        cocheGasolina.frenar();
        System.out.println(cocheGasolina);

        // Principio Liskov
        CocheElectrico cocheElectrico = new CocheElectrico("TOYOTA", "PRIUS", 4);
        cocheElectrico.cargarBaterias();
        cocheElectrico.acelerar();
        cocheElectrico.acelerar();
        System.out.println(cocheElectrico);

        CocheGasolina cocheGasolinaTurbo = new CocheGasolinaTurbo("AUDI", "R8", 3);
        cocheGasolinaTurbo.acelerar();
        cocheGasolinaTurbo.acelerar();
        cocheGasolinaTurbo.cargarCombustible();
        System.out.println(cocheGasolinaTurbo);

        Coche cocheComun = new CocheGasolina("SEAT", "IBIZA", 6);
        cocheComun.acelerar();
        cocheComun.acelerar();
        cocheComun.acelerar();
        cocheComun.frenar();
        System.out.println(cocheComun);

        System.out.println("\nFin del programa");
    }
}

