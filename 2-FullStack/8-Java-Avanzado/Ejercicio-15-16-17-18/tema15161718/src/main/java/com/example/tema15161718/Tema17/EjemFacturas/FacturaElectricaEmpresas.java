package com.example.tema15161718.Tema17.EjemFacturas;

import javax.swing.text.Document;

public class FacturaElectricaEmpresas extends FacturaElectrica {
    @Override
    double calcular() {
        return 0.55 + obtenerImpuesto(0.55);
    }

    /*@Override
    double obtenerImpuesto(double precio) {
        return precio * 21 / 100;
    }*/
}
