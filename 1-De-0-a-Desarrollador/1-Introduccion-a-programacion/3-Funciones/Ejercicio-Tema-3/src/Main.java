
//Primera Parte
//Crear una función con tres parámetros que sean números que se suman entre si
//llamar a la funcion en el main y darle valores


public class Main {
    public static void main(String[] args) {
        //System.out.println("Hello world!");



        // para el ejercicio2
        // Crear un objeto y sumar una puerta
        Coche miCoche = new Coche();
        miCoche.anadirPuerta();
        System.out.println( "El coche ahora tiene " + miCoche.puerta + " Puertas");



        //Creacion e inicializacion de la variable resultado
        int resultado = 0;
        int resultado2 = 0;
        //resultado de la funcion suma se guarda en resultado
        resultado = suma(6,10,4);
        resultado2 = suma(7,3,5);
        //impresion de resultado
        System.out.println("La Suma total es: " +  resultado );
        System.out.println("La Suma total es: " +  resultado2 );
    }

    //Creacion de la funcion sumar con tres parametros
    public static int suma(int a, int b, int c){
        return a + b + c;
    }




}


//Segunda Parte
//Crear Clase Coche
//Dentro de la clase coche, una variable numerica que almacene el numero de puertas que tiene
//Una funcion que incremente el numero de puertas que tiene el coche
// Crear un objeto miCoche en el main y añadirle una puerta
//mostrar el numero de puertas que tiene el objeto

class Coche{
    public int puerta = 4;

    public void anadirPuerta(){
        this.puerta++;
    }
}
