package com.example.testing.unidad11.repositories;

import com.example.testing.unidad11.entities.Usuario;

import java.io.IOException;
import java.util.ArrayList;

abstract public class UsuariosDB {

    private int totalInserciones = 0;
    private int totalEliminaciones = 0;

    protected void incrementarInserciones() {
        totalInserciones++;
    }

    protected void incrementarEliminaciones() {
        totalEliminaciones++;
    }

    abstract public ArrayList<Usuario> obtener();

    abstract public Usuario buscar(Usuario usuario);

    abstract public boolean insertar(Usuario usuario);

    abstract public boolean borrar(Usuario usuario);
}
