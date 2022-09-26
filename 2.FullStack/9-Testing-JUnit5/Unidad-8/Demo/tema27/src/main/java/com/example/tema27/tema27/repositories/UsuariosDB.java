package com.example.tema27.tema27.repositories;

import com.example.tema27.tema27.entities.Usuario;

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
