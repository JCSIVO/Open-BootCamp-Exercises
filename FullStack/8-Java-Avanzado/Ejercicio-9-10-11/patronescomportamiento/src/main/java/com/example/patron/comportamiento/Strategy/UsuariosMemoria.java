package com.example.patron.comportamiento.Strategy;

import java.util.ArrayList;

public class UsuariosMemoria implements Usuarios{
    private ArrayList<String> usuarios = new ArrayList();


    @Override
    public void crear(String nombre) {
        usuarios.add(nombre);
    }

    @Override
    public ArrayList<String> listar() {
        return usuarios;
    }
}
