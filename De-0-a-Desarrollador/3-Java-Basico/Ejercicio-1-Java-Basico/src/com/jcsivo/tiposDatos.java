package com.jcsivo;

public class tiposDatos {
    public static void main(String[] args) {
        //1. Numerico
            //1.1 Enteros
        byte num1 = 40;
        short num2 = -700;
        int num3 = 20000;
        long num4 = -57000;
        System.out.println(num1);
        System.out.println(num2);
        System.out.println(num3);
        System.out.println(num4);
            //1.2 Decimales
        float num5 = 7.9f;
        double num6 = 46.96d;
        System.out.println(num5);
        System.out.println(num6);
        //2.Booleanos
        boolean estadoCivil = true;
        boolean casado = false;
        System.out.println("El estado de civil " + estadoCivil + " o esta casado " + casado);
        //3. Texto
        char letraDni = 'X';
        String varible1 = "Hoy hace un bonito dia";
        System.out.println("La letra del DNI ES " + letraDni + " y el dia es: " +  varible1);
    }
}
