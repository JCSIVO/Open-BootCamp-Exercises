package com.example.singleton.EjercicioResuelto;

public class SoyUnico {

    private String nombre;
    private static SoyUnico soyUnico;

    // El constructor es privado, no permite que se genere un constructor por defecto.
    private SoyUnico(String nombre) {
        this.nombre = nombre;
        System.out.println("Mi nombre es: " + this.nombre);
    }

    public static SoyUnico getSingletonInstance(String nombre) {
        if (soyUnico == null){
            soyUnico = new SoyUnico(nombre);
        }
        else{
            System.out.println("No se puede crear el objeto "+ nombre + " porque ya existe un objeto de la clase SoyUnico");
        }
        
        return soyUnico;
    }
    
    // metodos getter y setter
    
//Sobreescribimos el método clone, para que no se pueda clonar un objeto de esta clase
@Override
public SoyUnico clone(){
    try {
        throw new CloneNotSupportedException();
    } catch (CloneNotSupportedException ex) {
        System.out.println("No se puede clonar un objeto de la clase SoyUnico");
    }
    return null; 
}
    public String getNombre() {
    return nombre;
    }
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }


}
