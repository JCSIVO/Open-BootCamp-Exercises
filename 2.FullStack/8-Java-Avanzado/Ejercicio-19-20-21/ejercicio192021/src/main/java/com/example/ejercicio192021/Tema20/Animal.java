package com.example.ejercicio192021.Tema20;

interface Animal {
    boolean beber();
}

interface AnimalVolador {
    boolean beber();
    boolean volar();
}

public class Pajaro implements Animal, AnimalVolador {
    @Override
    public boolean beber() {
        return false;
    }

    @Override
    public boolean volar() {
        return false;
    }
}


public class Perro implements Animal {
    @Override
    public boolean beber() {
        return false;
    }
}