package com.example.tema15161718.Ejercicio;

import java.io.*;

public class Main {
    public static void main(String[] args) {

        /**
         * Ejercicio Uno
         */

        try {
            ArithmeticException.cociente(5,0);
        } catch (Exception e) {
            System.out.println("No se puede dividir entre -> " + e.getMessage());
        }/*finally {
            System.out.println("Debes de cambiar el divisor por otro numero");
        }*/


        /**
         * Ejercicio Dos
         */

        try {
            int array[] =  new int[] {3, 4, 6, 9, 7, 1};
            // Accedemos al elemento de la posición tres del array
            System.out.println("En la posicion tres esta el valor: " + array[3]);
            // Accedemos al elemento de la posicion siete del array
            System.out.println("El valor de la posicion siete es: " + array[9]);
        } catch (Exception e) {
            System.out.println("No se puede acceder a un numero fuera del array -> " + e.getMessage());
        }

        
        /**
         * Ejercicio Tres
         */

        try {
        BufferedReader br = new BufferedReader(new FileReader("datos.txt"));
        } catch (FileNotFoundException e3) {
            e3.printStackTrace();
        }
        // declaramos la cadena vacia 
        String data =null;
        
        // Creamos el bucle para leer e imprimir datos
        BufferedReader br = null;
        try {
            while ((data = br.readLine()) != null) 
            {
            System.out.println(data);
            }
        } catch (IOException e1) {
            
            e1.printStackTrace();
        } 
        
        // cerramos el objeto
        try {
            br.close();
        } catch (IOException e) {
            
            e.printStackTrace();
        }
    }
}

