package com.example.singleton.EjercicioResuelto;

public class Main {

    public static void main(String[] args) {

        
        SoyUnico Jose = SoyUnico.getSingletonInstance("Jose Lopez");
        SoyUnico Blanca = SoyUnico.getSingletonInstance("Blanca Sanchez");
        
        // Jose y Blanca son referencias a un único objeto de la clase SoyUnico
        System.out.println(Blanca.getNombre());
        System.out.println(Jose.getNombre());  

        try{
            SoyUnico jose = Jose.clone();
            System.out.println(jose.getNombre());
        }catch (NullPointerException ex){
            ex.printStackTrace();
        }

    }
}
