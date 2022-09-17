package com.example.tema15161718.Tema15;

import java.util.ArrayList;

public class Usuarios {
    ArrayList<String> usuarios = new ArrayList();
    private int contador = 0;

    public Usuarios() {
        /*contador = contador + 1;
        contador++;
        // contador ++; Esta manera no queda nada claro que esten unidos

        if (1 > 2) {
            //1 es mayor que dos
        }

        for () {
            for () {

            }
        }*/

        // Variables en ambito ficticio
        int sumador = 1;

        for (;;sumador++) // puedes poner ; o {}
            ;
    }


    /*public String obtenerUsuario() {
        String variable1;
        String variable2;
        int contador1;
        double valor3;
        for (String usuario : usuarios) {
            return usuario;
        }

        return "";

        for (int i = 0; i < usuarios.size(); i++) {
            // Código
            return "";        
        }
    }*/

    public String obtnerUsuario() {
        return obtenerUsuariosDeBaseDeDatos(); 
    }

    public String obtnerUsuario(int idUsuario) {
        return obtenerUsuariosDeBaseDeDatos(); 
    }

    public String obtnerUsuario(int idUsuario, String nombre) {
        return obtenerUsuariosDeBaseDeDatos(); 
    }

    public String obtenerUsuariosDeBaseDeDatos() {
        conectarABBDD();
    }

    public void conectarABBDD() {
        // Establecer conexion
        // Verificar conexion
        // Reintentar si falla
        // Devolver handler
    }

}
