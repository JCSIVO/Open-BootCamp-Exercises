package com.ejercicio121314.Sesion13;

public class UserException extends Exception{
    public UserException(String message) {
        super("UserException:" + message);
    }
}
