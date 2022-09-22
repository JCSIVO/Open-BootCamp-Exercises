package com.example.ejercicio222324.Tema23;

public class UsuariosNiveles extends Usuarios{
    public boolean esAdministrador(Usuario usuario) {
        /*if (usuariosDB.buscar(usuario) == null) {
            return false;
        }

        if (usuario.nivelAcceso != 10) {
            return false;
        }
        return true;*/
        return comprobarNivel(usuario, 10);
    }

    public boolean esEstudiante(Usuario usuario) {
        /*if (usuariosDB.buscar(usuario) == null) {
            return false;
        }

        if (usuario.nivelAcceso != 5) {
            return false;
        }
        return true;*/
        return comprobarNivel(usuario, 5);
    }

    public boolean esInvitado(Usuario usuario) {
        /*if (usuariosDB.buscar(usuario) == null) {
            return false;
        }

        if (usuario.nivelAcceso != 1) {
            return false;
        }
        return true;*/
        return comprobarNivel(usuario, 1);
    }


    private boolean comprobarNivel(Usuario usuario, int nivel) {
        if (usuariosDB.buscar(usuario) == null) {
            return false;
        }

        if (usuario.nivelAcceso != nivel) {
            return false;
        }
        return true;
    }
}
