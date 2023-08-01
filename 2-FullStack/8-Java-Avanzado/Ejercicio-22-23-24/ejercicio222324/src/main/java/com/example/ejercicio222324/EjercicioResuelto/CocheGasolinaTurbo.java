package com.example.ejercicio222324.EjercicioResuelto;

public class CocheGasolinaTurbo extends CocheGasolina {
    private final int VELOCIDAD_MAXIMA = 220;
    private final int VELOCIDAD_INC_DEC = 30;

    public CocheGasolinaTurbo(String marca, String modelo, int numPuertas) {
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
