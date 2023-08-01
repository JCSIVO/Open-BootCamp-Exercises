package com.example.ejercicio222324.Ejercicio;

public class LskCoche {
    Coche[] arrayCoches = {
        new Coche("Audi"),
        new Coche("BMW"),
        new Coche("Seat"),
        new Coche("Toyota"),
    };

    public static void imprimirNumPuertas(Coche[] arrayCoches) {
        for (Coche coche : arrayCoches) {
            /*if (coche instanceof Audi)
            System.out.println(numPuertasAudi());
            if (coche instanceof BMW)
            System.out.println(numPuertasBMWi());
            if (coche instanceof Seat)
            System.out.println(numPuertasSeat());
            if (coche instanceof Toyota)
            System.out.println(numPuertasToyota());*/
            System.out.println(coche.numPuertas());
        
    }
    imprimirNumPuertas(arrayCoches);

    }
}
