package com.example.ejercicio222324.Tema24;

import java.util.ArrayList;

public class UsuariosDBMemoria extends UsuariosDB{
    private ArrayList<Usuario> usuarios = new ArrayList();
    
    @Override
    public ArrayList<Usuario> obtener() {
        return usuarios;
    }
    @Override
    public Usuario buscar(Usuario usuario) {
        for (Usuario usuarioActual: obtener()) {
            if (usuarioActual.nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                return usuarioActual;
            }
        }
        return null;
    }
    @Override
    public void insertar(Usuario usuario) {
        if (buscar(usuario) != null) {
            return;
        }
        usuarios.add(usuario);
    }
    @Override
    public void borrar(Usuario usuario) {
        for (int i = 0; i < usuarios.size(); i++) {
            if (usuarios.get(i).nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                usuarios.remove(i);
            }
        }
    }
}
