package com.example.ejercicio222324.Tema24;

import java.util.ArrayList;

abstract class UsuariosDB {
    abstract ArrayList<Usuario> obtener();
    abstract Usuario buscar(Usuario usuario);
    abstract void insertar(Usuario usuario);
    abstract void borrar(Usuario usuario);
}
