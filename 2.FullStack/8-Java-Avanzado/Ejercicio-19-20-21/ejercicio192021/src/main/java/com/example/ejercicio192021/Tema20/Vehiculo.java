package com.example.ejercicio192021.Tema20;

abstract class Vehiculo {
    String tipo;

    public Vehiculo(String tipo) {
        this.tipo = tipo;
    }

    public String getTipo() {
        return tipo;
    }

    abstract obtenerPotencia();

    /*public class VehiculoDB {
        public void guardaVehiculoDB() {
            // Conecto a la bbdd
            // Verifico que no este previamente registrado
            // Inserto el registro
            // Finalizo
        }
    }*/
}

class Coche extends Vehiculo {
    @Override
    int obtenerPotencia() {
        return 1000;
    }
}

class Moto extends Vehiculo {
    @Override
    int obtenerPotencia() {
        return 500;
    }
}

class Furgoneta extends Vehiculo {
    @Override
    int obtenerPotencia() {
        return 750;
    }
}

class Avion extends Vehiculo {
    @Override
    int obtenerPotencia() {
        return 70000;
    }
}