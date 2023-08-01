package com.example.tema252627.Tema27;

import java.util.ArrayList;

interface UsuariosDB {

    /*private int totalInsercciones = 0;
    private int totalEliminaciones = 0;

    public int getTotalInsercciones() {
        return totalInsercciones;
    }

    public int getTotalEliminaciones() {
        return totalEliminaciones;
    }

    protected void incrementarInsercciones() {
        totalInsercciones++;
    }

    protected void incrementarEliminaciones() {
        totalEliminaciones++;
    }*/


    abstract ArrayList<Usuario> obtener();
    abstract Usuario buscar(Usuario usuario);
    abstract void insertar(Usuario usuario);
    abstract void borrar(Usuario usuario);
}
