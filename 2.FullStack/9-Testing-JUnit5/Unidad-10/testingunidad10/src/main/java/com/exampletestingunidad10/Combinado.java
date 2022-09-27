package com.exampletestingunidad10;

import java.util.ArrayList;

public class Combinado implements Bebida{
    private ArrayList<String> ingredientes = new ArrayList();

    public Combinado() {
        /*ingredientes.add("Ron");
        ingredientes.add("Cola");
        ingredientes.add("Lima");
        ingredientes.add("Limon");*/
        double valor = (int)(Math.random() * 100);
        for (int i = 0; i <= valor; i++) {
            ingredientes.add(String.valueOf(i));
        }
    }

    public ArrayList<String> getIngredientes() {
        System.out.println("Estoy en getIngredientes()");
        return ingredientes;
    }

    public int contarIngredientes() {
        // return ingredientes.size();
        return getIngredientes().size();
    }
}
