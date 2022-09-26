package com.example.tema27.tema27.entities;

public class UsuariosBuilder {
    private Usuario usuario = new Usuario();

    public UsuariosBuilder(String nombreUsuario) {
        usuario.nombre = "";
        usuario.apellidos = "";
        usuario.email = "";
        usuario.nivelAcceso = -1;

        usuario.nombreUsuario = nombreUsuario;
    }

    public UsuariosBuilder conNombre(String nombre) {
        usuario.nombre = nombre;
        return this;
    }

    public UsuariosBuilder conApellidos(String apellidos) {
        usuario.apellidos = apellidos.length() > 0 ? apellidos : "Sin apellidos";
        return this;
    }

    public UsuariosBuilder conEmail(String email) {
        usuario.email = email;
        return this;
    }

    public UsuariosBuilder conNivelDeAcceso(int nivelDeAcceso) {
        usuario.nivelAcceso = nivelDeAcceso;
        return this;
    }

    public Usuario build() {
        return usuario;
    }
}
