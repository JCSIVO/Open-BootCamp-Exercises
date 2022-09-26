package com.example.unidad7.curso;

import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.junit.jupiter.api.Assertions.assertNotEquals;

import java.util.ArrayList;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Nested;
import org.junit.jupiter.api.Order;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.condition.EnabledIf;

public class UsuariosTest {
    Usuarios usuarios = new Usuarios();
    Usuario usuario = new Usuario();

    // @Test
    @ParameterizedTest
    @ValueSource(strings = {"pepe", "manolo", "juan" })
    void crear(String nombre) {
        // Usuarios usuarios = new Usuarios();
        // Usuario usuario = new Usuario();
        // usuario.nombre = "Pepe";
        usuario.nombre = nombre;
        assertEquals(true, usuarios.crear(usuario));

        for (Usuario usuario : usuarios.obtener()) {
            System.out.println("Usuario: " + usuario.nombre );
        }
    }

    @Nested
    // @EnabledIf("curso.UsuariosCondition#puedeCrearseUsuario")
    public class SoloSiUsuarioHaSidoCreado {
        @BeforeEach
        void inicializar() {
            usuario.nombre = "Pepe";
            usuarios.crear(usuario);
        }

        @Test
        @Order(1)
        void borrar() {
        // Usuarios usuarios = new Usuarios();
        // Usuario usuario = new Usuario();
        // usuario.nombre = "Pepe";
        // usuarios.crear(usuario);
        assertEquals(true, usuarios.borrar(usuario));
        }
        @Test
        @DisplayName("¿Tengo usuarios?")
        @Order(0)
        void listar() {
            // Usuarios usuarios = new Usuarios();
            ArrayList<Usuario> listado = usuarios.obtener();
            System.out.println("Tengo usuarios: " + listado.size());
            // assertNotEquals(listado.size() == 0, listado);
            assertNotEquals(listado.size() == 0, listado);
        }

        @Nested
        public class ListarSoloSiSeHaBorrado {
        @Test
        void listarBorrados() {
            ArrayList<Usuario> listado = usuarios.obtener();
            assertEquals(listado.size() == 0, listado);
            }
        }
    }
}
