package com.example.singleton.Builder;

public class Main {
    public static void main(String[] args) {
        //vehiculo vehiculo = new Vehiculo();
        /*vehiculo.setMarca("Filostro");
        vehiculo.setMotor("Diesel");
        vehiculo.setTipo("Combustion");
        vehiculo.setPuertas(5);*/
        Vehiculo coche = new CocheBuilder("Filostro")
                .setPuertas(5)
                .setMotor("Electrico")
                .build();

                /*StringBuilder cadena = new StringBuilder("Hola");
                cadena.append(" Amigos").append(" Del").append(" Curso");
                System.out.println(cadena);*/

                System.out.println("Marca: " + coche.getMarca());
                System.out.println("Puertas: " + coche.getPuertas());
                System.out.println("Motor: " + coche.getMotor());
    }
}
