package com.example.ejercicio222324.Tema23;

public class UsuariosDBEstadisticas extends UsuariosDB{
    private int totalInsercciones = 0;
    private int totalEliminaciones = 0;

    @Override
    public void insertar(Usuario usuario) {
        super.insertar(usuario);
        totalInsercciones++;
    }

    @Override
    public Usuario buscar(Usuario usuario) {
        return super.buscar(usuario);
    }

    @Override
    public void borrar(Usuario usuario) {
        super.borrar(usuario);
        totalEliminaciones++;
    }
    public int getTotalEliminaciones() {
        return totalEliminaciones;
    }

    public int getTotalInsercciones() {
        return totalInsercciones;
    }
}
