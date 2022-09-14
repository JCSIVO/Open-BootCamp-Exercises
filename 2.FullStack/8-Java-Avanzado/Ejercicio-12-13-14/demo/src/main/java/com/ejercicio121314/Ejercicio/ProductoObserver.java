package com.ejercicio121314.Ejercicio;


import java.util.Observable;
import java.util.Observer;

import com.ejercicio121314.Ejercicio.Producto.PrecioEvent;

/**
 * La clase ProductoObserver que implementa desde Observer
 * y en la que se imprime el precio final del producto
*/
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
