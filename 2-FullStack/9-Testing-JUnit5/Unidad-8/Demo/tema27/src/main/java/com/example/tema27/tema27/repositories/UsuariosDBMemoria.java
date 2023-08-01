package com.example.tema27.tema27.repositories;

import com.example.tema27.tema27.entities.Usuario;

import java.io.IOException;
import java.util.ArrayList;

public class UsuariosDBMemoria extends UsuariosDB {
    ArrayList<Usuario> usuarios = new ArrayList();

    @Override
    public ArrayList<Usuario> obtener() {
        return usuarios;
    }

    @Override
    public Usuario buscar(Usuario usuario) {
        for (Usuario usuarioActual : obtener()) {
            if (usuarioActual.nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                return usuario;
            }
        }

        return null;
    }

    @Override
    public boolean insertar(Usuario usuario) {
        for (Usuario usuarioActual : usuarios) {
            if (usuarioActual.nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                return false;
            }
        }

        usuarios.add(usuario);
        incrementarInserciones();
        return true;
    }

    @Override
    public boolean borrar(Usuario usuario) {
        for (int i = 0; i < usuarios.size(); i++) {
            if (usuarios.get(i).nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                usuarios.remove(i);
                incrementarEliminaciones();
                return true;
            }
        }

        return false;
    }
}
