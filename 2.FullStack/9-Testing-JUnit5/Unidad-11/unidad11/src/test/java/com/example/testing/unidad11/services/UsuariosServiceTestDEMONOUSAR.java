package com.example.testing.unidad11.services;

import com.example.testing.unidad11.entities.Usuario;
import com.example.testing.unidad11.entities.UsuariosBuilder;
import com.example.testing.unidad11.repositories.UsuariosDB;
import com.example.testing.unidad11.repositories.UsuariosDBFichero;
import com.example.testing.unidad11.repositories.UsuariosDBMemoria;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Disabled;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Nested;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.extension.ExtendWith;
import org.mockito.Mock;
import org.mockito.junit.jupiter.MockitoExtension;

import static org.mockito.Mockito.*;

import static org.junit.jupiter.api.Assertions.*;

@ExtendWith(MockitoExtension.class)
class UsuariosServiceTestDEMONOUSAR {
    @Mock
    UsuariosDB usuariosDB;

    UsuariosService usuariosService = new UsuariosService();
    Usuario usuario = new UsuariosBuilder("PRUEBA").build();

    @BeforeEach
    @Disabled
    void setUp() {
        // usuariosDB = mock(UsuariosDB.class);
        usuariosService.setUsuariosDB(usuariosDB);
    }

    @Test
    void crearUsuario() {
        when(usuariosDB.insertar(usuario)).thenReturn(true);

        boolean resultado = usuariosService.crearUsuario(usuario);
        assertTrue(resultado);
    }
}