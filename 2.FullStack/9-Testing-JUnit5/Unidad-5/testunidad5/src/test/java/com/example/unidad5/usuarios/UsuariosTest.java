package com.example.unidad5.usuarios;

import static org.junit.jupiter.api.Assertions.assertEquals;

import javax.naming.spi.DirStateFactory.Result;

import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

public class UsuariosTest {
    private final String nombrePorDefecto = "pruebas";

    Usuarios usuarios = new Usuarios();
    Usuario usuario = new Usuario();

    @BeforeEach
    void inicializa() {
        usuario.nombre = nombrePorDefecto;
    }

    @Test
    void pruebaCrearUsuario() {
        // Usuarios usuarios = new Usuarios();

        // Usuario usuario = new Usuario();
        // usuario.nombre = "pruebas";

        // usuarios.crear(usuario);
        Usuario usuarioCreado = usuarios.crear(usuario);

        assertEquals(usuarioCreado.nombre, nombrePorDefecto);
    }

    @Test
    void pruebaObtenerUsuario() {
        // Usuarios usuarios = new Usuarios();

        // Usuario usuario = new Usuario();
        // usuario.nombre = "pruebas";

        usuarios.crear(usuario);

        String resultado = usuarios.buscar(usuario);
        assertEquals(nombrePorDefecto, resultado);
    }

    @Test
    void pruebaCrearUsuarioNoExistente() {
        String resultado = usuarios.buscar(usuario);
        assertEquals(null, resultado);
    }

    @Test
    void pruebaBorrarUsuario() {
        // Usuarios usuarios = new Usuarios();

        // Usuario usuario = new Usuario();
        // usuario.nombre = "pruebas";

        usuarios.crear(usuario);

        boolean resultado = usuarios.borrar(usuario);
        // assertEquals(true, usuarios.borrar(usuario));
        assertEquals(true, resultado);
    }

    @Test
    void pruebaBorrarUsuarioNoExistente() {
        boolean resultado = usuarios.borrar(usuario);
        assertEquals(false, resultado);
    }
}
