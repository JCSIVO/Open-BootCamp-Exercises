package com.example.testing.unidad11.repositories;

import java.util.ArrayList;

import com.example.testing.unidad11.entities.Usuario;
import com.example.testing.unidad11.entities.UsuariosBuilder;

public class UsuariosDBStub extends UsuariosDBMemoria{
    Usuario usuario = new UsuariosBuilder("UsuarioStub")
                .conNombre("Stub")
                .conApellidos("Demo")
                .conEmail("demo@stub.tld")
                .conNivelDeAcceso(15)
                .build();

    /*@Override
    public ArrayList<Usuario> obtener() {
        ArrayList<Usuario>usuarios = new ArrayList();
        usuarios.add(usuario);

        return usuarios;
    }


    @Override
    public Usuario buscar(Usuario usuario) {
        return usuario;
    }

    @Override
    public boolean insertar(Usuario usuario) {
        return true;
    }

    @Override
    public boolean borrar(Usuario usuario) {
        return true;
    }*/
}
