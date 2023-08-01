package com.example.tema252627.Tema26.Inicial;

public class Usuario {
    public String nombreUsuario;
    public String nombre;
    public String apellidos;
    public String email = "";
    public int nivelAcceso;

    @Override
    public String toString() {
        return "nombre de Usuario " + nombreUsuario + "\r\n" 
                + "nombre: " + nombre + "\r\n"
                + "Apellidos: " + apellidos + "\r\n" 
                + "email: " + email + "\r\n"
                + "nivel de acceso: " + nivelAcceso; 
    }
}
