package com.ejercicio121314.Sesion14;

/**
 * La clase UserRegisteredException gestiona las excepciones generadas 
 * por el gestor de usuarios cuando este ya existe.
 */
public class UserRegisteredException extends UserException{
    public UserRegisteredException(String message) {
        super("Usuario ya existe: " + message);
    }
}
