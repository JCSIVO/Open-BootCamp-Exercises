package com.openbootcamp.demotesting.operaciones;

import java.io.IOException;

public class Aritmetica {
    public double suma(double a, double b) {
        return a + b;
    }

    public double resta(double a, double b) {
        return a - b;
    }

    public double falladora() throws IOException {
        throw new IOException();
    }
}
