package com.example.tema27.tema27.repositories;

import com.example.tema27.tema27.entities.Usuario;

import java.io.IOException;
import java.util.ArrayList;

public class UsuariosDBNullable extends UsuariosDB {
    @Override
    public ArrayList<Usuario> obtener() {
        return null;
    }

    @Override
    public Usuario buscar(Usuario usuario) {
        return null;
    }

    @Override
    public boolean insertar(Usuario usuario) {
        return false;
    }

    @Override
    public boolean borrar(Usuario usuario) {
        return true;
    }
}
