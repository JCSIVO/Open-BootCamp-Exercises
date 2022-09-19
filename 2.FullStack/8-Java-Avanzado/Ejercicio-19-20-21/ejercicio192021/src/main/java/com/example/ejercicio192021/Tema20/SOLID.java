package com.example.ejercicio192021.Tema20;

interface BaseDeDatos {
    void obtenerDatos();
    void enviarDatos();
}

class BDDMySQL implements BaseDeDatos { }
class BDDFile implements BaseDeDatos { }

public class SOLID {
    public BaseDeDatos bdd;

    public dameDatos(BaseDeDatos bdd) {

    }

    public tomaDatos(BaseDeDatos bdd) {

    }
}

public static class main {
    public static void main(String[] args) {
        SOLIDO solido = new SOLID();

        BDDFile bbdd = new BDDFile();
        BDDMySQL otrabbdd = new BDDMySQL();

        solido.dameDatos(bbdd);
        solido.tomaDatos(otrabbdd);
    }
}
