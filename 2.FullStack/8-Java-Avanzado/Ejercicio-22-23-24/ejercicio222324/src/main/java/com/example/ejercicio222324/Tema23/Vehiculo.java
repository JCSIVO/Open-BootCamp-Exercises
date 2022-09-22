package com.example.ejercicio222324.Tema23;

public interface Vehiculo {
    String getTipoVehiculo();
}

class Coche implements Vehiculo {
    String tipo;

    public Coche(String tipo) {
        this.tipo = tipo;
    }

    @Override
    public String getTipoVehiculo() {
        return tipo;
    }
}

class CocheElectrico implements Vehiculo {
    String tipo;
    String baterias;

    public CocheElectrico(String tipo) {
        this.tipo = tipo;
        this.baterias = "si";
    }

    @Override
    public String getTipoVehiculo() {
        return tipo;
    }

    public String getBaterias() {
        return this.baterias;
    }
}
