package com.example.tema252627.Tema26;

import javax.xml.crypto.Data;

public class Main {
    public static void main(String[] args) {
        Usuario usuario = new Usuario();
        usuario.setNombre("Pepe");

        // DatabaseMySQL db = new DatabaseMySQL();
        //db.Guardar(usuario);

        // GuardarEnBaseDeDatos
        // DatabaseSQLite adb = new DatabaseSQLite();
        DatabaseMySQL adb = new DatabaseMySQL();
        GuardarEnBaseDeDatos(adb, usuario);
    }

    private static void GuardarEnBaseDeDatos(DatabaseStore db, Usuario usuario) {
        db.Guardar(usuario);
    }
}
