package com.example.tema15161718.Tema17.EjemFacturas;

abstract public class FacturaElectrica {
    double impuesto = 21;

    double obtenerImpuesto(double precio) {
         return precio * impuesto / 100;
    }

    // Convertimos las dos funciones siguientes en Abstractas
    /* public double calcularPrecioUsuario() {
        return 0.55 + obtenerImpuesto(0.55);
    }

    public double calcularPrecioEmpresa() {
        return 0.90 + obtenerImpuesto(0.90);
    } */
    abstract double calcular();
}
