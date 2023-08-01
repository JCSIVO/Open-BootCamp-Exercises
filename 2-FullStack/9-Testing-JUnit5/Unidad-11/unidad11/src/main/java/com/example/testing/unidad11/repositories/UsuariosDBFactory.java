package com.example.testing.unidad11.repositories;

public class UsuariosDBFactory {
    private String tipoDeBBDD = "";
    public UsuariosDBFactory(String tipoDeBBDD) {
        this.tipoDeBBDD = tipoDeBBDD;
    }

    public UsuariosDB getDatabaseInstance() {
        if (tipoDeBBDD.equalsIgnoreCase("memoria")) {
            return new UsuariosDBMemoria();
        } else if (tipoDeBBDD.equalsIgnoreCase("fichero")) {
            return new UsuariosDBFichero();
        }
        return new UsuariosDBNullable();
    }
}
