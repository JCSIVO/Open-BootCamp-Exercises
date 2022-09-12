public class Main {
    public static void main(String[] args) {
        //System.out.println("Hello world!");

        Persona persona = new Persona();
        persona.setNombre("Blanca");
        persona.setEdad(24);
        persona.setTelefono(675675342);

        System.out.println("Hola me llamo " + persona.getNombre() + " tengo " + persona.getEdad() + " y mi telefono es el: " + persona.getTelefono());

    }
}


//Ejercicio Tema 8

class Persona{
    private String nombre;
    private int edad;
    private int telefono;

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    public String getNombre() {
        return this.nombre;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }
    public int getEdad() {
        return this.edad;
    }

    public void setTelefono(int telefono) {
        this.telefono = telefono;
    }
    public int getTelefono() {
        return this.telefono;
    }


}