package com.example.tema15161718.Tema18.Encapsulacion;

public class Usuario {
    private String nombre;
    private int edad;
    private String email;
    private long altura;
    
    public String getNombre() {
        Acceso acceso = new Acceso();
        acceso.setRetries(acceso.getRetries() + 1);;

        return nombre;
    }
    public void setNombre(String nombre) {
        this.nombre = nombre;

        EnviarCorreo correo = new EnviarCorreo();
        correo.enviarCorreoDeBienvenida(nombre);
    }
    public int getEdad() {
        return edad;
    }
    public void setEdad(int edad) {
        this.edad = edad;
    }
    public String getEmail() {
        return email;
    }
    public void setEmail(String email) {
        this.email = email;
    }
    public long getAltura() {
        return altura;
    }
    public void setAltura(long altura) {
        this.altura = altura;
    }

    
}
