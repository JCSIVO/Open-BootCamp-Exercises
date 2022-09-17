package com.example.tema15161718.Tema18.Encapsulacion;

public class Main {
    public static void main(String[] args) {
        Usuario usuario = new Usuario();
        usuario.setNombre("Pepe");
        usuario.setEdad(15);

        System.out.println(usuario.getNombre());
        System.out.println(usuario.getEdad());
    }
}
