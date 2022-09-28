package com.example.testing.unidad11.repositories;

import com.example.testing.unidad11.entities.Usuario;
import com.example.testing.unidad11.entities.UsuariosBuilder;
import net.bytebuddy.implementation.bytecode.Throw;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Nested;
import org.junit.jupiter.api.Test;

import java.io.IOException;
import java.util.ArrayList;

import static org.junit.jupiter.api.Assertions.*;
import static org.junit.jupiter.api.Assumptions.*;

class UsuariosDBFicheroTest {
    UsuariosDBFichero usuariosDB = new UsuariosDBFichero();

    @BeforeAll
    public static void crearFichero() {
        UsuariosDBFichero usuariosDB = new UsuariosDBFichero();
        usuariosDB.crearFichero();
    }

    @Test
    void obtenerSinFichero() {
        ArrayList<Usuario> usuarios = usuariosDB.obtener();
        assertNotEquals(null, usuarios);
    }

    @Nested
    public class conFicheroCreado {
        @Test
        void crearUsuario() {
            Usuario usuario = new UsuariosBuilder("open")
                    .conNombre("Open")
                    .conApellidos("BC")
                    .conEmail("contacto@open-bootcamp.com")
                    .conNivelDeAcceso(10)
                    .build();

            usuariosDB.borrar(usuario);
            //assumeTrue(usuariosDB.buscar(usuario) == null);

            boolean resultado = usuariosDB.insertar(usuario);
            assertNotEquals(false, resultado);
        }

        @Nested
        public class conUsuarioCreado {
            @BeforeAll
            public static void init() {
                Usuario usuario = new UsuariosBuilder("open")
                        .conNombre("Open")
                        .conApellidos("BC")
                        .conEmail("contacto@open-bootcamp.com")
                        .conNivelDeAcceso(10)
                        .build();

                UsuariosDBFichero usuariosDB = new UsuariosDBFichero();
                usuariosDB.insertar(usuario);
            }

            @Test
            void obtenerConFichero() {
                ArrayList<Usuario> usuarios = usuariosDB.obtener();
                assertNotEquals(null, usuarios);
            }

            @Test
            void buscar() {
                Usuario usuario = new Usuario();
                usuario.nombreUsuario = "open";

                Usuario resultado = usuariosDB.buscar(usuario);
                assertNotEquals(null, resultado);
            }

            @Test
            void eliminar() {
                UsuariosDB usuariosDB = new UsuariosDBFichero();

                Usuario usuario = new Usuario();
                usuario.nombreUsuario = "open";

                assumeFalse(usuariosDB.buscar(usuario) == null);

                boolean resultado = usuariosDB.borrar(usuario);
                assertNotEquals(false, resultado);
            }
        }
    }
}