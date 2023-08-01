package com.ejercicio121314.Sesion13;

/**
 *  Copyrigth (C) 2000-2022 JCSIVO, Inc.
 */

import java.util.ArrayList;

import org.omg.CORBA.UserException;


/**
 * La calse Usuarios implementa diversos métodos par ala gestioopn del
 * modelo "Usuario". Provee funciones que hacen, bla, bla, bla, e
 * implementa el patron "Iterator".
 * 
 * El objetivo de esta clase es sustituir a la vieja clase "UsuariosManager"
 * tras una refactorizacion donde mantener el codigo antiguo era mas costoso
 * que implementar esta nueva clase.
 * 
 * A consecuencia de estos cambios, y al mantener durante un tiempo de transición
 * la vieja clase, se recomienda utilizar un patrón "facade" que esconda al 
 * desarrollador final esta transicion.
 * 
 * Al utilizar este patrón facade, en primera instancia, el desarrollador debera invocar 
 * a los nuevos metodos, pero garantizamos que a futuro, no deba volver a cambiar el 
 * codigo que interactua con la base de datos de usuarios.
 * 
 * @see  https://www.ggogle.es
 */
public class Usuarios {
    /** Lista de Usuarios */
    private ArrayList<Usuario> usuarios = new ArrayList();
    
    // JCSIVO18/10/2022 - Cambio la implementacion a una con argumentos variables. 

    /**
     * Esta funcion añade un numero variable de objetos del tipo Usuario en 
     * instancia actual
     */

    /**
    * Añade un nuevo usuario a la lista
    * 
    * @param usuarios Uno o varios objetos de tipo Usuario
    * @throws UserException Si el usuario ya esta registrado .
    */
    public void añadirUsuarios(Usuario ...usuarios) throws UserException{
        for (Usuario usuario: usuarios) {
            for (Usuario existenet : this.usuarios) {
                if (existenet.nombre.toLowerCase() == usuario.nombre.toLowerCase()) {
                    throw new UserRegisteredException(usuario.nombre);
            }
        }
        this.usuarios.add(usuario);
        }
    }

    // Comentarios de atribucion
    // Codigo Original: @JCSIVO ó (algo mas comun)-> http://stackoverflow.com/adews/123456
    // Copiado por @JCSIVO

/**
 * Determina si el dia es domingo
 * 
 * @param numeroDia Numero de dia a validar, de 0 a 7
 * @return true si es domingo, false en caso contrario
 * @since 12/09/2022
 */


    private boolean hoyEsDomingo(int numeroDia) {
        // Si numeroDia es 0, lo  consideramos Domingo por el calendario que siguen 
        // los estadounidenses. Autor: @JCSIVO.
        return numeroDia == 0 || numeroDia == 7;
    }
}
