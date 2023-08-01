package com.example.tema27.tema27.repositories;

import com.example.tema27.tema27.entities.Usuario;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.PrintStream;
import java.util.ArrayList;
import java.util.Scanner;

public class UsuariosDBFichero extends UsuariosDB {
    public String ficheroDatos = "fichero.txt";


    public void crearFichero() {
        try {
            FileOutputStream fileOutputStream = new FileOutputStream(ficheroDatos, true);
            PrintStream printStream = new PrintStream(fileOutputStream);
            printStream.println("");
            printStream.flush();
            printStream.close();
        } catch (Exception e) {
        }
    }

    @Override
    public ArrayList<Usuario> obtener() {
        ArrayList<Usuario> usuarios = new ArrayList();

        try {
            Scanner scanner = new Scanner(new File(ficheroDatos));

            while (scanner.hasNext()) {
                String usuarioActual = scanner.next();
                String[] partes = usuarioActual.split(",");

                Usuario usuarioTemp = new Usuario();
                usuarioTemp.nombreUsuario = partes[0];
                usuarioTemp.nombre = partes[1];
                usuarioTemp.apellidos = partes[2];
                usuarioTemp.email = partes[3];
                usuarioTemp.nivelAcceso = Integer.parseInt(partes[4]);

                usuarios.add(usuarioTemp);
            }

            scanner.close();
        } catch (Exception e) {
            System.out.println("No puedo abrir el fichero de bbdd");
        }

        return usuarios;
    }

    // nombreUsuario,nombre,apellidos,email,nivelDeAcceso
    @Override
    public Usuario buscar(Usuario usuario) {
        for (Usuario usuarioActual : obtener()) {
            if (usuarioActual.nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                return usuarioActual;
            }
        }

        return null;
    }

    @Override
    public boolean insertar(Usuario usuario) {
        if (buscar(usuario) != null) {
            return false;
        }

        try {
            FileOutputStream fileOutputStream = new FileOutputStream(ficheroDatos, true);
            PrintStream printStream = new PrintStream(fileOutputStream);
            printStream.println(separarUsuarioPorComas(usuario));
            printStream.flush();
            printStream.close();

            return true;
        } catch (Exception e) {
        }

        return false;
    }

    private String separarUsuarioPorComas(Usuario usuario) {
        return usuario.nombreUsuario + ","
                + usuario.nombre + ","
                + usuario.apellidos + ","
                + usuario.email + ","
                + usuario.nivelAcceso;
    }

    @Override
    public boolean borrar(Usuario usuario) {
        boolean status = false;
        ArrayList<Usuario> usuarios = obtener();

        for (int i = 0; i < usuarios.size(); i++) {
            if (usuarios.get(i).nombreUsuario.equalsIgnoreCase(usuario.nombreUsuario)) {
                usuarios.remove(i);

                try {
                    PrintStream printStream = new PrintStream(ficheroDatos);

                    for (Usuario usuarioActual : usuarios) {
                        String usuarioComas = separarUsuarioPorComas(usuarioActual);
                        printStream.println(usuarioComas);
                    }

                    printStream.close();
                    status = true;

                } catch (Exception e) {
                }
            }
        }

        return status;
    }
}
