package com.ejercicio121314.Sesion14;

import java.text.BreakIterator;
import java.util.Arrays;

// Una funcion es una agrupacion de codigo que debe realizar una tarea concreta 

// InLine -> Extraer el cuerpo de la funcion y se sustituye en el bloque que lo llama
public class Main {
    public static void main(String[] args) {


    // TODO: Mejorar el codigo con buenos comentarios (se usan para algo pendeinte de hacer)
    Usuarios usuarios = new Usuarios();

    Usuario usuario = new Usuario();
    usuario.nombre = "Pepe";
    usuario.apellido = "Botella";
    usuario.puedeConducir = false;

    Usuario usuario2 = new Usuario();
    usuario.nombre = "Fran";
    usuario.apellido = "Manjaron";
    usuario.puedeConducir = true;
    try  {

        usuarios.añadirUsuarios(usuario, usuario2, usuario);
        // usuarios.añadirUsuarios(usuario);
    } catch (UserException e) {
        System.out.println("Error al añadir objeto de usuario:" + e.getMessage());
    }
    
    // usuarios.añadirUsuario("Pepe", "Botella", 14, false);
    // usuarios.añadirUsuario("Fran", "Manjaro", 18, true);
    }
// Funcion monadica (funcion con un parametro)
public static int sumarNumeros(int []numeros) {
    return Arrays.stream(numeros).reduce(0, (a, b) -> a + b);
    // La funcion de arriba es el resumen de la de abajo
    /*int resultado = 0;

    for (int numero: numeros) {
        resultado += numero;
    }
    return resultado;*/
}
// FGunciones diadicas (funcion con dos parametros)
public static int sumarValores(int valorA, int valorB) {
    return valorA + valorB;
}

// FGunciones triadicas (funcion con tres parametros)
public static int sumarTresValores(int valorA, int valorB, int valorC) {
    return valorA + valorB + valorC;
}

// cuatro o mas parametros poliadricas
// con cuatro parametros lo que se emplena son los argumentos variables
public static int sumarInfinitamente(int ...numeros) {
    int resultado = 0;
    for (int numero : numeros) {
        resultado += numero;
    }
    return resultado;
}





    //private static boolean esMayor(int a, int b) {
        /*if (a > b) {
            return true;
        }
        return false;*/

        // Refactorizacon de la funcion
        // return a > b ? true : false;
    //}
    
    public static boolean esLaborable(int dia) {
        // El switch se puede reemplazar por 
        if (dia > 0 && dia < 6) {
            return true;
        }
        return false;
        
        // Usando la refactorizacion el codigo anterior se puede simplificar 
        return dia > 0 && dia < 6;



        /*switch (dia) {
            case 1: // Simplificamos los case agrupeandolos por respuestas (return true)
            case 2:
            case 3:
            case 4:
                return true;
                break;
            case 6:
            return false;
            break;
            
        }*/
    }
    // Se utiliza un verbo para nimbrar a la funcion demoSwitch no es muy conciso 
    // hay nombrar correctamente los argumnetos (String cosa) esta mal nombrado 
    // lo suyo seria nombrar (String sFruta) para que a la hora de llamar a la funcion
    // sepas los parametros a pasar
    public static void determinarFruta() {
        String sFruta = "Manzana";

        if (sFruta == "Pera") {
            System.out.println("Es una pera");
        } else if (sFruta == "Melocoton") {
            System.out.println("Es un Melocoton");
        } else {
            System.out.println("Es otra cosa");
        }

        switch (sFruta)) {
            case "Pera":
                System.out.println("Es una pera");
                break;
            case "melocoton":
                System.out.println("Es un melocoton");
                break;
            default:
                System.out.println("Es otra cosa");
                break;
        }
    }
}
