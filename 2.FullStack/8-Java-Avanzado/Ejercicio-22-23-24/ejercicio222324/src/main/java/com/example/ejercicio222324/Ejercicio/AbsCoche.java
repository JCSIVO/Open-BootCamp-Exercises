package com.example.ejercicio222324.Ejercicio;

abstract class AbsCoche{
    abstract int precioCoche();
    abstract int numPuertas();
}
class Audi extends Coche {
    public Audi(String string) {
        super(string);
    }

    //@Override
    int imprimirPrecioCoche() {
        return 30000;
    }

    @Override
    int numPuertas() {
        return 5;
    }

}
class BMW extends Coche {
    public BMW(String string) {
        super(string);
    }

    // @Override
    int imprimirPrecioCoche() {
        return 15000;
    }

    @Override
    int numPuertas() {
        return 3;
    }
}


