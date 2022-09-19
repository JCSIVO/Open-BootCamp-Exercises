package com.example.ejercicio192021.Ejercicio.exceptions;

public class ParameterException extends Exception{
    public ParameterException(String message){
        super("Parameter Error -> " + message);
    }
}
