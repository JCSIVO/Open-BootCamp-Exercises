package com.example.ejercicio192021.Tema20;

public class MainSOLID {
    public static void main(String[] args) {
        Vehiculo []vehiculos = {
            /*new Vehiculo("Coche"),
            new Vehiculo("Moto"),
            new Vehiculo("Furgoneta")*/
            new Coche(),
            new Moto(),
            new Furgoneta(),
            new Avion()
        };
        imprimePotencia(vehiculos);
    }
    public static void imprimePotencia(Vehiculo []vehiculos) {
        for (Vehiculo vehiculo : vehiculos) {
            /*if (vehiculo.tipo.equalsIgnoreCase("coche")) {
                System.out.println("1000");
            } else if (vehiculo.tipo.equalsIgnoreCase("moto")) {
                System.out.println("500");
            } else if (vehiculo.tipo.equalsIgnoreCase("furgoneta")) {
                System.out.println("750");
            }*/

            System.out.println(vehiculo.obtenerPotencia());
        }
    }
}
