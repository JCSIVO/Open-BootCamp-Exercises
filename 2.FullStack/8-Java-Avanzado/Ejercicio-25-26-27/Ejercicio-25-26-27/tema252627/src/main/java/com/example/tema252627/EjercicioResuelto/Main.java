package com.example.tema252627.EjercicioResuelto;

public class Main {
    public static void main(String[] args) {
        System.out.println("\nInicio del programa");
        System.out.println("-------------------\n");

        // Implementacion de segregacion de innterfaces
        // ICoche
        // ICocheElectrico -> cargarBateria()
        // ICocheGasolina -> cargarCombustible()

        // Implementacion de principio de inversion de dependencias
        // Interface CochesRepository
        // implementacion 1 --> MySQLRepository
        // implementacion 2 --> OracleRepository

        // Guardamos coche (interface ICocheElectrico) en BD MySQL
        CocheElectrico cocheElectrico = new CocheElectrico("TOYOTA", "PRIUS", 4);
        cocheElectrico.cargarBaterias();
        cocheElectrico.acelerar();
        CochesService service = new CochesService(new MySQLRepository());
        service.guardar(cocheElectrico);


        // Guardamos coche (interface ICocheGasolina) en BD Oracle
        CocheGasolina cocheGasolina = new CocheGasolina("BMW", "X6", 3);
        cocheGasolina.cargarCombustible();
        cocheGasolina.acelerar();
        service = new CochesService(new OracleRepository());
        service.guardar(cocheGasolina);

        System.out.println("\nFin del programa");
    }
}

