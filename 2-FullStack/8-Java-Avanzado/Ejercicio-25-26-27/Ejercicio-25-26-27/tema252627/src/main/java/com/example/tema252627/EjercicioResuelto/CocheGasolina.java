package com.example.tema252627.EjercicioResuelto;

public class CocheGasolina extends Coche implements ICocheGasolina{
    private final int VELOCIDAD_MAXIMA = 150;
    private final int VELOCIDAD_INC_DEC = 10;

    public CocheGasolina(String marca, String modelo, int numPuertas) {
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
    public void cargarCombustible() {
        
    }
}
