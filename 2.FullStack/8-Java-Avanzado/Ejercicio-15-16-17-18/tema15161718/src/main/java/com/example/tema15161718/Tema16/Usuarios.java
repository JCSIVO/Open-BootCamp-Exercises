package com.example.tema15161718.Tema16;

import java.util.ArrayList;

public class Usuarios {
    ArrayList<String> usuarios = new ArrayList();
    ArrayList<Usuario> usuarios2 = new ArrayList();

    public Usuario(Usuario usuario) {
        usuarios2.add(usuario);
    }

    private void Usuario() {}

    // public void Usuarios(Usuario usuario) { }

        public ArrayList<Usuario> getUsuarios2() {
            return usuarios2;
        }



    public void meterUsuario(String nombre) throws UsuariosNombreCortoException, UsuariosYaRegistradosException{
        if (nombre.length() < 5) {
            throw new UsuariosNombreCortoException(nombre);
        }

        for (String usuario : usuarios) {
            if (usuario == nombre) {
                throw new UsuariosYaRegistradosException(nombre);
            }
        }
        usuarios.add(nombre);
        System.out.println("Usuario metido: " + nombre);
    }
}
