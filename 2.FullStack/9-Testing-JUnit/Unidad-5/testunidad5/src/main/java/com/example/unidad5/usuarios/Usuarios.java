package com.example.unidad5.usuarios;

import java.util.ArrayList;

public class Usuarios {
    ArrayList<Usuario> usuarios = new ArrayList();

    public Usuario crear(Usuario usuario){
        usuarios.add(usuario);
        return usuario;
    }

    public String buscar(Usuario usuario) {
        for (Usuario usuarioActual : usuarios) {
            if (usuarioActual.nombre.equalsIgnoreCase(usuario.nombre)) {
                return usuarioActual.nombre;
            }
        }
        // return "";
        return null;
    }

    public boolean borrar(Usuario usuario) {
        /* if (buscar(usuario) == null) {
            return false;
        }*/
        return usuarios.remove(usuario);
        // return false;
    }
}
