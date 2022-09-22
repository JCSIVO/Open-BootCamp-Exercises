package com.example.tema252627.EjercicioResuelto;

public class CocheElectrico extends Coche implements ICocheElectrico{
    private final int VELOCIDAD_MAXIMA = 100;
    private final int VELOCIDAD_INC_DEC = 5;

    public CocheElectrico(String marca, String modelo, int numPuertas) {
        super(marca, modelo, numPuertas);
    }

    @Override
    public void acelerar() {
        int temp = (getVelocidad() + VELOCIDAD_INC_DEC > VELOCIDAD_MAXIMA) ?
                    VELOCIDAD_MAXIMA : (getVelocidad() + VELOCIDAD_INC_DEC);
                    setVelocidad(temp);
    }

    @Override
    public void frenar() {
        int temp = (getVelocidad() - VELOCIDAD_INC_DEC < 0) ?
                    0 : (getVelocidad() - VELOCIDAD_INC_DEC);
                    setVelocidad(temp);
    }

    @Override
    public void cargarBaterias() {
        
    }
}
