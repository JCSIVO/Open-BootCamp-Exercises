package com.example.tema252627.Tema25.Codigo.Inicial;

import java.util.ArrayList;

public class UsuariosDBMemoria implements UsuariosDB, UsuariosDBEstadisticas{
    private int totalEliminaciones = 0;
    private int totalInsercciones = 0;

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
        totalInsercciones++;
    }
    @Override
    public void borrar(Usuario usuario) {
        for (int i = 0; i < usuarios.size(); i++) {
            if (usuarios.get(i).nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                usuarios.remove(i);
                totalEliminaciones++;
            }
        }
    }

    @Override
    public int getTotalInsercciones() {
        return totalInsercciones;
    }

    @Override
    public int getTotalEliminaciones() {
        return totalEliminaciones;
    }
}
