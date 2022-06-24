public class Main {
    public static void main(String[] args) {
        //System.out.println("Hello world!");
        Cliente cliente = new Cliente();
        Trabajador trabajador = new Trabajador();

        cliente.nombre = "Juan";
        cliente.edad = 28;
        cliente.telefono = 657654789;
        cliente.credito = 176.200;
        System.out.println("El Cliente " + cliente.nombre + " tiene " + cliente.edad + " años, su telefono es: " + cliente.telefono + " y dipone de un credito de " + cliente.credito + " €");


        trabajador.nombre = "Judith";
        trabajador.edad = 20;
        trabajador.telefono = 756345098;
        trabajador.salario = 1203.56;
        System.out.println("La trabajadora " + trabajador.nombre + " tiene " + trabajador.edad + " años, su telefono es: " + trabajador.telefono + " y dipone de un salario de " + trabajador.salario + " €");


    }
}


//Ejercicio 9

class Persona {
    String nombre;
    int edad;
    int telefono;
}

class Cliente extends Persona {
    double credito;
}

class Trabajador extends Persona {
    double salario;
}