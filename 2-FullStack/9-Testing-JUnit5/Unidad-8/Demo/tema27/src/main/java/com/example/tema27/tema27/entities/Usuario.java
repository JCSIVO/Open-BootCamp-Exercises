package com.example.tema27.tema27.entities;

public class Usuario {
    public String nombreUsuario = "";
    public String nombre = "";
    public String apellidos = "";
    public String email = "";
    public int nivelAcceso = 0;

    @Override
    public String toString() {
        return "nombre de usuario: " + nombreUsuario + "\r\n"
                + "nombre: " + nombre + "\r\n"
                + "apellidos: " + apellidos + "\r\n"
                + "email: " + email + "\r\n"
                + "nivel de acceso: " + nivelAcceso;
    }
}