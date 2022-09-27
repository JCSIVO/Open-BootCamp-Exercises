package com.example.unidad9;

import java.util.ArrayList;

public class DatosFalsos extends DatosReales{
    /*public DatosFalsos() {
        System.out.println("Datos conectados, en testing!");
    }

    public ArrayList<String> getData() {
        ArrayList<String> retorno = new ArrayList();
        retorno.add("Hola");
        retorno.add("Mundo");

        return retorno;
    }*/
    @Override
    public ArrayList<Double> getData() {
        ArrayList<Double> retorno = new ArrayList();
        retorno.add(1.0);
        retorno.add(2.0);
        retorno.add(3.0);
        return retorno;
    }
}
