package com.example.ejercicio222324.EjercicioResuelto;

public class ExportacionDatos {
    public void exportar(Coche coche) {
        System.out.println("\n------------------------------------");
        System.out.println(" Coche Marca    : " + coche.getMarca());
        System.out.println(" Coche Modelo  : " + coche.getModelo());
        System.out.println(" Coche Puertas: " + coche.getNumPuertas());
        System.out.println("--------------------------------------\n");
    }
}
