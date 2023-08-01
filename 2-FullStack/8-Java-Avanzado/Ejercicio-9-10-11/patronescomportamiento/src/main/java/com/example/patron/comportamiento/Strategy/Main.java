package com.example.patron.comportamiento.Strategy;

import java.util.ArrayList;

import javax.print.DocFlavor.STRING;

public class Main {
    public static void main(String[] args) {
        
        UsuariosMemoria usuarios = new UsuariosMemoria();
        //UsuariosFichero usuarios = new UsuariosFichero();

        /*usuarios.crear("Blanca");
        usuarios.crear("Judith");
        usuarios.crear("Lucas");*/

        crear(usuarios, "Blanca");
        crear(usuarios, "Judith");
        crear(usuarios, "Lucas");

        for (String usuario : listar(usuarios)) {
            System.out.println(usuario);
        }
    }

    public static void crear(Usuarios usuarios, String nombre) {
        usuarios.crear(nombre);
    }

    public static ArrayList<String> listar(Usuarios usuarios) {
        return usuarios.listar();
    }
}
