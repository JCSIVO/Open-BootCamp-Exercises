package com.example.testing.unidad11.services;

import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.junit.jupiter.api.Assertions.assertNotNull;
import static org.junit.jupiter.api.Assertions.assertTrue;
import static org.mockito.Mockito.*;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Order;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.extension.ExtendWith;
import org.mockito.Mock;
import org.mockito.exceptions.base.MockitoException;
import org.mockito.junit.jupiter.MockitoExtension;

import com.example.testing.unidad11.entities.Usuario;
import com.example.testing.unidad11.entities.UsuariosBuilder;
import com.example.testing.unidad11.repositories.UsuariosDB;
import com.example.testing.unidad11.repositories.UsuariosDBFichero;
import com.example.testing.unidad11.repositories.UsuariosDBMemoria;
import com.example.testing.unidad11.repositories.UsuariosDBStub;

@ExtendWith(MockitoExtension.class)
class UsuariosServiceTest {
    UsuariosService usuariosService = new UsuariosService();
        @Mock
        UsuariosDB usuariosDB;
        //UsuariosDB usuariosDB = mock(UsuariosDBFichero.class);
        UsuariosDB usuariosDBReal = new UsuariosDBFichero();

        Usuario usuario = new UsuariosBuilder("usuarioStub")
                .conNombre("Ejemplo")
                .conApellidos("Demo")
                .conEmail("Esto es un email")
                .conNivelDeAcceso(15)
                .build();

                @BeforeEach
    void antesDe() {
        usuariosService.setUsuariosDB(usuariosDB);
        // usuariosService.setUsuariosDB(usuariosDBReal);
    }

    @Test
    @Order(1)
    void obtenerUsuario() {
        // UsuariosService usuariosService = new UsuariosService();

        // UsuariosDB usuariosDB = new UsuariosDBStub();
        // UsuariosDB usuariosDB = mock(UsuariosDBMemoria.class);
        // usuariosService.setUsuariosDB(usuariosDB);

        // Usuario usuario = new UsuariosBuilder("usuarioStub").build();
        // usuariosService.crearUsuario(usuario);
        // Usuario usuario = new UsuariosBuilder("usuarioStub").build();
        when(usuariosDB.buscar(usuario)).thenReturn(usuario);

        // Usuario resultado = usuariosService.obtenerUsuario("usuarioStub");
        Usuario resultado = usuariosService.obtenerUsuario(usuario.nombreUsuario);
        assertNotNull(resultado);
        // assertEquals(usuario.nombreUsuario, "usuarioStub");
    }

    
    @Test
    @Order(2)
    void crearUsuario() {
        // UsuariosService usuariosService = new UsuariosService();

        // UsuariosDB usuariosDB = mock(UsuariosDBFichero.class);
        // UsuariosDB usuariosDB = new UsuariosDBFichero();
        // usuariosService.setUsuariosDB(usuariosDB);

        /*Usuario usuario = new UsuariosBuilder("usuarioStub")
                .conNombre("Ejemplo")
                .conApellidos("Demo")
                .conEmail("Esto es un email")
                .conNivelDeAcceso(15)
                .build();*/

        when(usuariosDB.buscar(usuario)).thenReturn(usuario);
        // when(usuariosDB.insertar(usuario)).thenReturn(true);
        boolean resultado = usuariosService.crearUsuario(usuario);
        // System.out.println("Resultado: " + resultado);
        assertTrue(resultado);
    }

    @Test
    @Order(3)
    void crearUsuarioQueNoExiste() {
        when(usuariosDB.buscar(usuario)).thenReturn(null);
        when(usuariosDB.insertar(usuario)).thenReturn(true);

        boolean resultado = usuariosService.crearUsuario(usuario);
        assertTrue(resultado);
    }

    @Test
    @Order(4)
    void borrarUsuario() {

        boolean resultado = usuariosService.borrarUsuario(usuario.nombreUsuario);
        assertTrue(resultado);
    }
}