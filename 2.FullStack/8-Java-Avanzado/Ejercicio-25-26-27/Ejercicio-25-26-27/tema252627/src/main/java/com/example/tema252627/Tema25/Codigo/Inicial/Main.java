package com.example.tema252627.Tema25.Codigo.Inicial;

import java.util.Scanner;


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

        Scanner scanner = new Scanner(System.in);
        System.out.println("1 (ficheros) - 2 (momoria) 3 (vacio):");
        int numero = scanner.nextInt();


        UsuariosDB usuariosDB;
        // String tipo = "fichero";
        String tipo = "memoria";
        if (tipo.equalsIgnoreCase("fichero")) {
            usuariosDB = new UsuariosDBFichero();
        } else  {
            usuariosDB = new UsuariosDBMemoria();
        } 
        Usuarios usuarios = new Usuarios(usuariosDB);
        // UsuariosDBFichero usuarios = new UsuariosDBFichero();
        // Usuarios usuarios = new Usuarios(new UsuariosDBMemoria());
        // Usuarios usuarios = new Usuarios(new UsuariosDBFichero());
        // Usuarios usuarios = new Usuarios(usuariosDB);
        usuarios.insertar(usuario);
        usuarios.insertar(usuario2);
        usuarios.insertar(usuario3);

        /*Usuario openbootcamp = new Usuario();
        openbootcamp.nombreUsuario = "openbootcamp";
        Usuario resultado = usuarios.buscar(openbootcamp);
        System.out.println(openbootcamp.email);*/

        usuarios.borrar("openbootcamp2");
        for (Usuario a : usuarios.listar()) {
            System.out.println("Usuario actual: " + a.nombreUsuario);
            System.out.println("-------------" + "-".repeat(a.nombreUsuario.length()));
            System.out.println(a);
            System.out.println();
        }
        imprimirEstadistica(usuariosDB);
    }
    public static void imprimirEstadistica(UsuariosDB usuariosDB) {
        if (usuariosDB instanceof UsuariosDBMemoria) {
            System.out.println("Insercciones: " + ((UsuariosDBMemoria) usuariosDB).getTotalInsercciones());
            System.out.println("Eliminaciones: " + ((UsuariosDBMemoria) usuariosDB).getTotalEliminaciones());
        }
    }
}
