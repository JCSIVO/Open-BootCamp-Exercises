package com.example.singleton.Factory;

public class PrecioFactory {
    Precio precio;
    private PrecioFactory() {};


    public PrecioFactory(String pais) {
        if(pais.equalsIgnoreCase("España")) {
            System.out.println("España, precio en EUR");
            precio = new PrecioEUR();
        } else if (pais.equalsIgnoreCase("UK")) {
            System.out.println("Estamos en UK");
            precio = new PrecioGBP();
        } else {
            System.out.println("Otro pais, precio en USD");
            precio = new PrecioUSD();
        }
    }

    public double getPrecio() {
        return precio.getPrecio();
    }
}
