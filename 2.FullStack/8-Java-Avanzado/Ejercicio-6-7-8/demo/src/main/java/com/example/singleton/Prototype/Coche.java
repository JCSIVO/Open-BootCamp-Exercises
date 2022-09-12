package com.example.singleton.Prototype;

public class Coche implements Cloneable { // se le añade implements Cloneable
    public String marca;
    public String modelo;
    int puertas;

    public Coche() {}

    public Coche clonar() throws CloneNotSupportedException { // se le incluye desde throws Clone..
        /*Coche clon = new Coche();

        clon.marca = this.marca;
        clon.modelo = this.modelo;
        clon.puertas = this.puertas;

        return clon;*/

        return (Coche)this.clone(); 
    }

}
