package com.Ejercicio789;
import java.io.IOException;
import java.util.*;
import java.util.ArrayList;
import java.io.FileInputStream;
import java.io.InputStream;
import java.io.PrintStream;
import java.util.Map;

public class ejercicio789 {
    public static void main(String[] args) {

        //Introduce un texto para después invertir el orden

        Scanner scanner = new Scanner(System.in);
        String texto;
        System.out.println("Introduce un texto: ");
        texto = scanner.nextLine();
        System.out.println("Texto en orden correcto: " + texto);

        StringBuilder reves = new StringBuilder(texto);
         texto = reves.reverse().toString();
        System.out.println("Texto en orden inverso: " + texto);*/

    }


    public static class arrayUni{
        public static void main(String[] args) {

            //crear array de String y recorrerlo

            String arrayUni [] = {"Pedro", "Blanca", "Lucas"};

            for(int i = 0; i < arrayUni.length; i++){
                System.out.println("Nombre actual es: " + arrayUni[i].toString());
            }
        }
    }

    // Ejercicio 2 crear array bidimensional recorrelo y muestra posicion y valor

    public static class arrayBid{
        public static void main(String[] args) {

                          //fila columna
            int arrayBid[][] = new int[2][2];
            arrayBid[0][0] = 1;
            arrayBid[0][1] = 2;

            arrayBid[1][0] = 3;
            arrayBid[1][1] = 4;

            for(int i = 0 ; i < arrayBid.length; i++){
                System.out.println("El valor de i es: "+ i);

                for(int j = 0; j < arrayBid[i].length; j++){
                    System.out.println("Estoy en i = : " + i + " , j: " + j);
                    System.out.println(arrayBid[i][j]);
                }
            }

        }
    }

    //Crea un vector de 5 elementos y elimina 2 y 3 elemento
    public  static class vector{
        public static void main(String[] args) {
            Vector <Integer> miVector = new Vector<>();
            miVector.add(7);
            miVector.add(8);
            miVector.add(9);
            miVector.add(33);
            miVector.add(80);

            miVector.remove(2);
            miVector.remove(3);
            System.out.println("Mi vector depues de borrar es = " + miVector);


            //Indicar el problema de indicar un vector con la capacidad por defecto

            System.out.println("Cada vez que se sobrepasa el limite por defecto que es 10" + "la dimension del" +
                    "vector se duplica" + "llevando a cabo el desperdicio de mucha memoria");
        }
    }

    public static class arrayList{
        public static void main(String[] args) {
            ArrayList<String> miLista = new ArrayList<String>();
            miLista.add("Maria");
            miLista.add("Jose");
            miLista.add("Isabel");
            miLista.add("Judith");

            LinkedList<String> linkedlist = new LinkedList<String>();

            for (int i = 0; i < miLista.size(); i++) {
                linkedlist.add(i, miLista.get(i));
            }

                System.out.println("El contenido de mi lista es: ");
                for (int j = 0; j < miLista.size(); j++){
                    System.out.println(miLista.get(j));
                }

                System.out.println("El contenido de mi linkedListes: ");
                for (String elementos : linkedlist){
                    System.out.println(elementos + "");
                }
        }
    }


    public static class arraylist2{
        public static void main(String[] args) {
            //Crear arralist tipo int, rellenarlo y con bucle recorrer y mostrar y eliminar numeros pares y
            //mostrar arraylist final

            ArrayList<Integer>miLista2 = new ArrayList<Integer>();

            for(int i = 0; i < 11; i++){
                miLista2.add(i);
                System.out.println("Se rellena de 0 -10: " + miLista2);

                for (int j = 0; j < miLista2.size(); j++){
                    if(miLista2.get(j) % 2 == 0){
                        miLista2.remove(j);
                        System.out.println("Eliminamos los pares: " + miLista2);
                    }
                }

            }
            System.out.println("Impresion del ArrayList completo: " + miLista2);
        }
    }

    //realizar una division entre 0 y resolcerlo con try catch
    public static class divisionPorCero{

        private static int division(int num1, int num2) throws ArithmeticException{
            return num1 / num2;
        }

        public static void main(String[] args) {
            Scanner scanner = new Scanner(System.in);
            System.out.println("Introduce el primer numero: " );
            int num1 = scanner.nextInt();
            System.out.println("Introduce el segundo numero: ");
            int num2 = scanner.nextInt();

            try {
                //int resultado = num1 / num2;
                //System.out.println("El resultado final de dividir " + num1+ " entre " + num2 + " es igual a: " + resultado);
                System.out.println("El resultado final de dividir " + num1+ " entre " + num2 + " es igual a: " + division( num1, num2));
            }catch (ArithmeticException e){
                System.out.println("Esto no puede hacerse el dividir entre 0");
            }finally {
                System.out.println("Esto es una Demo de Código");
            }

        }
    }


    public static class copyFichero{
        public static void main(String[] args) {
            Scanner scanner = new Scanner(System.in);
            System.out.println("Introduce el fichero a copiar: ");
            String fileIn = scanner.nextLine();
            System.out.println("Introduce el fichero de destino: ");
            String fileOut = scanner.nextLine();
            copy(fileIn, fileOut);
        }

        private static void copy(String fileIn, String fileOut){
            try {
            InputStream in = new FileInputStream(fileIn);
            byte [] datos = in.readAllBytes();
            in.close();

            PrintStream out = new PrintStream(fileOut);
            out.write(datos);
            out.close();
            }catch (Exception e){
                System.out.println("Excepción:" + e.getMessage());
            }
        }
    }


    //Realizar un ejemplo con TreeMap para ver lo jugadores de un equipo de futbol

    public static class miEquipo{
        public static void main(String[] args) {
            Map<Integer, String> equipoFutbol = new TreeMap<Integer, String>();
            equipoFutbol.put(1, "Courtois");
            equipoFutbol.put(2, "Hazard");
            equipoFutbol.put(3, "Benzema");
            equipoFutbol.put(4, "Asensio");
            equipoFutbol.put(5, "Kross");

            Iterator<Integer> plantilla = equipoFutbol.keySet().iterator();
            Integer key = 0;
            for (key = 1; key < equipoFutbol.size(); key++) {
                System.out.println("El dorsal es: " + key + " y su nombre es: " + equipoFutbol.get(key));
            }
        }
    }
}
