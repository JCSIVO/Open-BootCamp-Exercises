package com.example.ejercicio192021.Tema21;


public class MainPruebas {
    public static void main(String[] args) {
        Usuarios usuarios = new Usuarios();

        Usuario openbootcamp = usuarios.obtenerUsuario("openbootcamp2");
        System.out.println(openbootcamp.nombreUsuario);
        System.out.println(openbootcamp.nombre);
        System.out.println(openbootcamp.apellidos);
        System.out.println(openbootcamp.email);
        System.out.println(openbootcamp.nivelAcceso);
    }
}
