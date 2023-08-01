package com.example.patron.comportamiento.Iterator;

public class Main {
    public static void main(String[] args) {
        Usuarios usuarios = new Usuarios();
        usuarios.crear(new Usuario("uno", 5));
        usuarios.crear(new Usuario("dos", 25));
        usuarios.crear(new Usuario("tres", 10));
        usuarios.crear(new Usuario("cuatro", 8));

        while (usuarios.hayMas()) {
            Usuario usuario = usuarios.siguiente();
            System.out.println("Usuario es " + usuario.getNombre());
        }

        usuarios.crear(new Usuario("cinco", 18));
        Usuario usuario = usuarios.siguiente();
        System.out.println("Usuario es " + usuario.getNombre());


        usuarios.reinicia();
        while (usuarios.hayMas()) {
            usuario = usuarios.siguiente();
            System.out.println("Usuario es " + usuario.getNombre());
        }
    }
}
