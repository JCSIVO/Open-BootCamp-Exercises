package com.ejercicio121314.Sesion12;

import java.util.Hashtable;

import javax.sound.sampled.BooleanControl;
import javax.swing.JLabel;

// El nombrado debe revelar las intenciones 
// Las clases se llamaran de una forma que revelen claramente lo que hacen
// Las interfaces tienen que utilizar adjetivos y tambien tienen que indicar los que hacen
// Los metodos empiezan por minuscula son verbos y si tiene multiples palabras "Las palabras se 
// Capitalizaran la inicial de cada una de ellas" -> construirCocheBonito()
// Las constantes todas en mayusculas 
// las variables y las propiedades nombres claros (menos temp o tmp para cosas auxiliares)
// dentro de las funciones lamba se pueden utilizar nombres cortos como "a,b,c"

// Hay que evitar el juego  de palabras 
/*
 * public salOPimienta(){}
 * public trucoOTrato(){}
 *  public iteradorConIterancia(){}  
 * */




public class Main {
    public static void main(String[] args) {
        UserManager oUserManager = new UserManager();
    }
}

class ReverseString {

}

class UserManager {
    // public static int final MAX_USERS = 15;
    private int contador = 0; 

    public void createUser() {
        // int i = 0;
        // i++;
        // int [] numeros = {1, 2, 3, 4, 5};
        // boolean diaONoche;
        // int []pares = {1, 2, 3, 4, 5};
        // String temp = "Hola";
        // String tmp = "hola";
        /*  int [][]numeros = {
            {1, 2, 3, 4, 5, 6}, 
            {1, 2, 3, 4, 5, 6}};

        for(int i = 0; i < numeros.length; i++) {
            for ( int j = 0; j< numeros[i].length; j++){

            }
        }*/
        // Anotacion Hungara
        int []aNumeros = {1, 2, 3, 4, 5, 6};
        boolean bEsDeDia = false;
        char cLetra = 'a';
        double dValor = 5.1d;
        Hashtable<String, Integer>hUsuarios = new Hashtable();


        int iValores = 5;
        long iValoresLong = 5;

        String sCadena = "Hola Mundo";
        var vVariable = 5;
        byte yByte = 1;  // byte byByte = 1;
        float fFloat = 1.5f; // float flFloat = 1.5f;

        JButton btnBotonAceptar;
        JButton btnBotonCancelar;

        JLabel lblLabel;

        int []sNumeros2 = {1, 2, 3, 4, 5};

        int []aiNumeros = {1, 2, 3, 4, 5};

        String []asNombres = {"Hola", "Juan"};

        int contador = 0;
        // más codigo 
        contador = aNumeros[3]; // Esto no se debe de hacer 
        JLabel = lblLabel = new JLabel("Boton aceptar");



    }
}

class Casa {
    // public construcirCoche(),,, // Esto no se debe de hacer 
}

enum nEstado {
    INICIAL,
    EN_PROGRESO
}
interface Iterable{}
interface Serializable{}
interface Iterador{}
interface Serializador{}
