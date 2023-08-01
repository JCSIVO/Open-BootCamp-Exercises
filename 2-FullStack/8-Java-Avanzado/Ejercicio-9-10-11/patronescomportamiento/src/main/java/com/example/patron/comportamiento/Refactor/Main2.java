package com.example.patron.comportamiento.Refactor;

import java.util.Arrays;

public class Main2 {
    public static void main(String[] args) {
        //int [] numeros = {12, 23, 45, 1, 9};
        //imprimeMayorYMenor(numeros);
        //Constructor Largo
        //ConstructorLargo cosa = new ConstructorLargo("a", "b", "c", "5");
        /*ConstructorLargoBuilder cosa = new ConstructorLargoBuilder("marca")
                    .conModelo("b")
                    .conMotor("Electrico")
                    .conPuertas(5);*/
    }

    // InLine
    /*public boolean hoyEsDomingo() {
        boolean isDomingo = hoyEsDiaNumero(7);
        if (isDomingo) {
            System.out.println(isDomingo);
        }
    }

    public static boolean hoyEsDiaNumero(int numero) {
        if (numero == 7) {
            return true;
        }
        return false;
    }*/


    /*public boolean hoyEsDomingo(int numero) {
        boolean isDomingo = (numero == 7 ? true : false);
        if (isDomingo) {
            System.out.println(isDomingo);
        }
    }*/


    //public static void imprimeMayorYMenor(int []numeros) {
        //int mayor = 0;
        //int menor = numeros [0];

        //for (int i = 0; i < numeros.length; i++) {
            /*if (mayor < numeros[i]) {
                mayor = numeros[i];
            }
            if (menor > numeros[i]) {
                menor = numeros[i];
            }*/
            // Refactorizamos todo lo anterior con el operador ternario
            //mayor = mayor < numeros[i] ? numeros[i] : mayor;
            //menor = menor > numeros[i] ? numeros[i] : menor;

            // Se refactoriza un poco mas
            /*for (int i : numeros) {
                mayor = mayor < i ? i : mayor;
                menor = menor > i ? i : menor;
            }*/
        //}
        // Programación funcional para refactorizar el código
        //int mayor = Arrays.stream(numeros)
           //     .reduce(0, (a, b) -> a > b ? a: b);

        //int menor = Arrays.stream(numeros)
             //   .reduce(numeros[0], (a, b) -> a< b ? a: b);

       // System.out.println("Mayor: " + mayor + " y Menor: " + menor);
    }

    /*public static int ifAnidado1() {
        int valor1 = 10;
        int valor2 = 10;

        /*if  (valor1 > valor2) {
            return valor1;
        } else {
            return valor2;
        }*/
        // la opcion correcta es: 
        // Extraer el valor de retorno

        if  (valor1 > valor2) {
            return valor1;
        }  
            return valor2;
    }*/
}
