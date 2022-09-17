package com.example.tema15161718.Tema16;

public class UsuariosException extends Exception {
    public UsuariosException(String message) {
        super("Error al registrar -> " + message);

        /*for (StackTraceElement elemento : getStackTrace()) {
            System.out.println((elemento.getClassName() + " " + elemento.getMethodName()));
        }*/
    }
}
