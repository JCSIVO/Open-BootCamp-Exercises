package com.example.tema15161718.Tema18.Encapsulacion;

public class Acceso {
    private int retries = 0;

    public int getRetries() {
        // return getIntentos();
        return retries;
    }

    /*public int getIntentos() {
        return retries;
    }*/

    public void setRetries(int retries) {
        // setIntentos(retries);
        this.retries = retries;
    }

    /*public void setIntentos(int intentos) {
        this.retries = intentos;
    }*/
}
