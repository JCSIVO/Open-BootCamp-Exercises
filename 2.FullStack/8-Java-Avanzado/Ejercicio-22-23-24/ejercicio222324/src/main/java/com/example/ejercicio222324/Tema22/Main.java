package com.example.ejercicio222324.Tema22;

public class Main {
    public static void main(String []args) {
        Usuario usuario = new Usuario();
        usuario.nombreUsuario = "openbootcamp";
        usuario.nombre = "Open";
        usuario.apellidos = "Bootcamp";
        usuario.email = "ejemplos@open-bootcamp.com";
        usuario.nivelAcceso = 1;

        Usuario usuario2 = new Usuario();
        usuario2.nombreUsuario = "openbootcamp2";
        usuario2.nombre = "Open";
        usuario2.apellidos = "Bootcamp";
        usuario2.email = "ejemplos@open-bootcamp.com";
        usuario2.nivelAcceso = 5;

        Usuario usuario3 = new Usuario();
        usuario3.nombreUsuario = "openbootcamp3";
        usuario3.nombre = "Open3";
        usuario3.apellidos = "Bootcamp3";
        usuario3.email = "ejemplos@open-bootcamp.com3";
        usuario3.nivelAcceso = 10;

        Usuarios usuarios = new Usuarios();
        usuarios.insertar(usuario);
        usuarios.insertar(usuario2);
        usuarios.insertar(usuario3);

        //Usuario openbootcamp = usuarios.obtenerUsuario("openbootcamp2");
        //System.out.println(openbootcamp.email);

        //usuarios.borrar("openbootcamp2");
        for (Usuario a : usuarios.listar()) {
            System.out.println("Usuario actual: " + a.nombreUsuario);
            System.out.println("-------------" + "-".repeat(a.nombreUsuario.length()));
            System.out.println(a);
            System.out.println();
        }
    }
}
