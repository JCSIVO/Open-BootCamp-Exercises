package com.example.tema15161718.Tema17.EjemFacturas;

public class FacturaElectricaUsuarios extends FacturaElectrica {
    @Override
    double calcular() {
        return 0.10 + obtenerImpuesto(0.10);
    }

    /*@Override
    double obtenerImpuesto(double precio) {
        return precio * 7 / 100;
    }*/
}
