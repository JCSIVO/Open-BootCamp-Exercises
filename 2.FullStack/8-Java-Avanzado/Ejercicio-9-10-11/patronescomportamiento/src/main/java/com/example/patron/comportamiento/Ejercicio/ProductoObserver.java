package com.example.patron.comportamiento.Ejercicio;


import java.util.Observable;
import java.util.Observer;

import com.example.patron.comportamiento.Ejercicio.Producto.PrecioEvent;

public class ProductoObserver implements Observer {
    @Override
    @SuppressWarnings("unchecked")
    public void update(Observable observable, Object args) {
        if (args instanceof PrecioEvent) {
            PrecioEvent evento = (PrecioEvent) args;
            System.out.printf("El producto %s ha cambiado de precio de %s a %s%n", evento.getProducto().getNombre(), evento.getPrecioAntiguo(), evento.getPrecioNuevo());
        }
    }
}
