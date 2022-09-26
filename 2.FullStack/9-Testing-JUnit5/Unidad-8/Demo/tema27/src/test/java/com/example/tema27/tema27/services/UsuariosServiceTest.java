package com.example.tema27.tema27.services;

import com.example.tema27.tema27.entities.Usuario;
import com.example.tema27.tema27.entities.UsuariosBuilder;
import com.example.tema27.tema27.repositories.UsuariosDB;
import com.example.tema27.tema27.repositories.UsuariosDBFichero;
import com.example.tema27.tema27.repositories.UsuariosDBMemoria;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Nested;
import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;

class UsuariosServiceTest {
    UsuariosDB usuariosDB = new UsuariosDBFichero();
    Usuario usuario = new UsuariosBuilder("pruebas").build();

    @Test
    void crearUsuario() {
        usuariosDB.insertar(usuario);
    }

    @Nested
    @DisplayName("Con usuario creado")
    class ConUsuarioCreado {
        @Test
        void borrarUsuario() {
            assertEquals(true, usuariosDB.borrar(usuario));
        }
    }
}