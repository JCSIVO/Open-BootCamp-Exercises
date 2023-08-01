package com.example.tema15161718.Tema16;

public class UsuariosYaRegistradosException extends UsuariosException{
    public UsuariosYaRegistradosException(String message) {
        super("Ya registrado -> " + message);
    }
}
