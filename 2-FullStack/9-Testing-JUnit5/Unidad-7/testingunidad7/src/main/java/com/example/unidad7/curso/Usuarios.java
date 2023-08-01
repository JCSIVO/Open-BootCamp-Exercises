package com.example.unidad7.curso;

import java.util.ArrayList;

public class Usuarios {
    private ArrayList<Usuario> usuarios = new ArrayList();

    public boolean crear(Usuario usuario) {
        return usuarios.add(usuario);
        // return false;
    }

    public boolean borrar(Usuario usuario) {
        return usuarios.remove(usuario);
    }

    public ArrayList<Usuario> obtener() {
        return usuarios;
    }
}

class UsuariosCondition {
    static boolean puedeCrearseUsuario(Usuario usuario) {
        Usuarios usuarios = new Usuarios();
        return usuarios.crear(usuario);
        // return false;
    }
}
