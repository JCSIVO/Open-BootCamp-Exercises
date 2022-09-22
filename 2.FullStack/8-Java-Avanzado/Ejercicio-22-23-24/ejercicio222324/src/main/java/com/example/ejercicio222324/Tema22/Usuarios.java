package com.example.ejercicio222324.Tema22;

import java.io.File;
import java.io.PrintStream;
import java.util.ArrayList;
import java.util.Scanner;

public class Usuarios {
    private UsuariosDB usuariosDB = new UsuariosDB();

    
    public ArrayList<Usuario> listar() {
        return usuariosDB.convertirUsuariosFicheroEnArrayList();
    }

    public Usuario obtener(String username) {
        ArrayList<Usuario> usuarios = usuariosDB.convertirUsuariosFicheroEnArrayList();

        for (Usuario usuarioActual : usuarios) {
            if (usuarioActual.nombreUsuario.equalsIgnoreCase(username)) {
                return usuarioActual;
            }
        }

        return null;
    }

    public void insertar(Usuario usuario) {
        if (obtener(usuario.nombreUsuario) != null) {
            return;
        }

        usuariosDB.insertar(usuario);
    }

    

    public void borrar(String username) {
        Usuario usuario = new Usuario();
        usuario.nombreUsuario = username;
        usuariosDB.borrar(usuario);
    }
}
