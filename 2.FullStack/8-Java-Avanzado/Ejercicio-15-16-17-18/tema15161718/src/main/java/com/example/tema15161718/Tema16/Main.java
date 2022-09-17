package com.example.tema15161718.Tema16;

import java.io.IOException;

import javax.swing.undo.StateEdit;

public class Main {
    public static void main(String[] args) {
        /*try { // Dentro del try va todo el código susceptible de generar una excepción 
            int valor = 5 / 0;
        } catch (Exception e) { //  Exception e es para capturar cualquier excepción o AritmeticException para las aritmeticas 
            System.out.println("Esto es una división por cero");

            for (StackTraceElement valor : e.getStackTrace()) {
                System.out.println("Linea " + valor.getLineNumber());
            }
        }*/

        //public static void b() {
           // int valor = 5;
            //try {
            //    valor = valor / 0;
            //} catch (ArithmeticException e) {
            //    valor = valor / 1;
           // }
            //System.out.println("Estoy aqui, valor tiene: " + valor);
        
        /*  try {
                divisionPorCero(5, 0);
            } catch (ArithmeticException e) {
                System.out.println("Hay una excepción aritmetica");
            } catch (IOException e) {
                System.out.println("Hay una excepción de IO");
            } catch (Exception e) {
                System.out.println("Otra excepción de tipo..." + e.getClass() +  " " + e.getMessage());
            }
        
        System.out.println("Estoy aqui, valor tiene: ");
    }
    public static int divisionPorCero(int valor, int dividendo) throws ArithmeticException, IOException {
        // return valor / 0;
        int resultado = 0;

        if (dividendo == 1) {
            throw new IOException();
        }
        try {
            resultado = valor / dividendo;
        } catch (ArithmeticException e) {
            throw new ArithmeticException();
        }
        throw new RuntimeException("Esto ya no funciona");*/
        // return resultado;

        Usuario usuario = null;
        Usuarios usuarios = new Usuarios(usuario);

        for (Usuario actual : usuarios.getUsuarios2()) {
            try {
                System.out.println(actual.name);
            } catch (NullPointerException e) {
                System.out.println("EXCEPCION! NAME ES NULO");
            } finally {
                System.out.println("Finally");
            }
            
        } 

        try {
            usuarios.meterUsuario("Pepe");
            usuarios.meterUsuario("Juan");
            usuarios.meterUsuario("Pepe");
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }

        try {
            divisionPorCero(null, 5);
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        
        
    }
}
