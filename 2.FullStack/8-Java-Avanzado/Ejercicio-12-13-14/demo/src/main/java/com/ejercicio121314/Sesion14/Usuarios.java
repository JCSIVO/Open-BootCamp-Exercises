package com.ejercicio121314.Sesion14;

import java.util.ArrayList;

import org.omg.CORBA.UserException;

public class Usuarios {
    private ArrayList<Usuario> usuarios = new ArrayList();
    
    // public void añadirUsuario(String nombre, String apellido, int edad, boolean puedeConducir) 
    /*  public void añadirUsuario(Usuario usuario) throws UserException{
        // Usuario usuario = new Usuario();
        // usuario.nombre = nombre;
        // usuario.apellido = apellido;
        // usuario.edad = edad;
        // usuario.puedeConducir = puedeConducir;

        if (usuarios.contains(usuario)) {
            throw new UserRegisteredException(usuario.nombre);
        }
        usuarios.add(usuario);
    }*/

    public void añadirUsuarios(Usuario ...usuarios) throws UserException{
        for (Usuario usuario: usuarios) {
            if (this.usuarios.contains(usuario)) {
                throw new UserRegisteredException(usuario.nombre);
        }
        this.usuarios.add(usuario);
        }
    }
}
