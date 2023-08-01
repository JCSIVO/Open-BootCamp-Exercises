package com.example.tema27.tema27.services;


import com.example.tema27.tema27.entities.Usuario;
import com.example.tema27.tema27.entities.UsuariosBuilder;
import com.example.tema27.tema27.repositories.UsuariosDB;
import com.example.tema27.tema27.repositories.UsuariosDBMemoria;
import org.springframework.stereotype.Service;

import java.util.ArrayList;

@Service
public class UsuariosService {
    UsuariosDB usuariosDB = new UsuariosDBMemoria();

    public void Usuarios(UsuariosDB usuariosDB) {
        this.usuariosDB = usuariosDB;
    }

    private void Usuarios() {}

    public ArrayList<Usuario> listarUsuarios() {
        return usuariosDB.obtener();
    }

    public Usuario obtenerUsuario(String username) {
        Usuario usuario = new Usuario();
        usuario.nombreUsuario = username;

        return usuariosDB.buscar(usuario);
    }

    /*
     * - Cosas a probar:
     *   - Si le paso un objeto "usuario" nulo, ¿me devuelve algun error?
     *   - Si el usuario ya existe, ¿lo crea igualmente?
     *          - Si ya existe, DEBO OBTENER "ya existe"
     *          - Si no existe, no debo obtener nada
     *
     *   - Si el usuario NO existe, ¿lo crea?
     *      - Si lo crea con éxito, no debo obtener nada PERO PUEDO BUSCARLO
     *      - Si no lo crea, debo obtener un valor de retorno null.
     */
    public void crearUsuario(Usuario usuario) {
        if (usuariosDB.buscar(usuario) != null) {
            return;
        }

        Usuario usuarioFiltrado = crearUsuarioReal(usuario);

        usuariosDB.insertar(usuarioFiltrado);
    }

    public void borrarUsuario(String username) {
        Usuario usuario = new Usuario();
        usuario.nombreUsuario = username;

        /*
         * Creo un usuario CONTROLADO POR MI.
         * Intento borrar al usuario, si el usuario se borra, OK.
         * SINO, NO OK.
         */
        usuariosDB.borrar(usuario);
    }

    private Usuario crearUsuarioReal(Usuario usuario) {
        UsuariosBuilder usuariosBuilder = new UsuariosBuilder(usuario.nombreUsuario);

        return usuariosBuilder
                .conNombre(usuario.nombre)
                .conApellidos(usuario.apellidos)
                .conNivelDeAcceso(usuario.nivelAcceso)
                .conEmail(usuario.email)
                .build();
    }
}

