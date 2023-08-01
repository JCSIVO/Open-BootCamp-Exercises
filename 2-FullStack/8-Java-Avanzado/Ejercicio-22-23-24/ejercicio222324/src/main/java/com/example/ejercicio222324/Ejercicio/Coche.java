package com.example.ejercicio222324.Ejercicio;

public class Coche {
    String marca;

    public Coche(String string) {
    }

    public void Coche(String marca) {
        this.marca = marca;
    }

    String getMarcaCoche() {
        return marca;
    }

    public char[] precioCoche() {
        return null;
    }
}

class CocheDB{
    void guardarCocheDB(Coche coche) { }
    void eliminarCocheDB(Coche coche) { }
}
