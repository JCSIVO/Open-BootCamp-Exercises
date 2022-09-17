package com.example.tema15161718.Tema16;

public class UsuariosNombreCortoException extends UsuariosException {
    public UsuariosNombreCortoException(String message) {
        super("Longitud de nombre corta -> " + message);

        }
    }
