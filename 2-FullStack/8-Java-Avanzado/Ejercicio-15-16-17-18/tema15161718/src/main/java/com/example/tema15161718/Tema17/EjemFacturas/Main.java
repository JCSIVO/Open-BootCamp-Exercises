package com.example.tema15161718.Tema17;

import com.example.tema15161718.Tema17.EjemFacturas.FacturaElectrica;
import com.example.tema15161718.Tema17.EjemFacturas.FacturaElectricaEmpresas;
import com.example.tema15161718.Tema17.EjemFacturas.FacturaElectricaUsuarios;

public class Main {
    public static void main(String[] args) {
        /*FacturaElectrica fe = new FacturaElectricaEmpresas();
        System.out.println(fe.calcular());

        FacturaElectrica feu = new FacturaElectricaUsuarios();
        System.out.println(feu.calcular());*/
        
        Usuario usuario = new Usuario("pepe");
        usuario.añadirVehiculo(new Vehiculo("coche"));

        Usuario usuario2 = new Usuario("Juan");
        usuario.añadirVehiculo(new Vehiculo("coche"));
        usuario.añadirVehiculo(new Vehiculo("Moto"));

        Usuarios usuarios = new Usuarios();
        usuarios.añadirUsuario(usuario);
        usuarios.añadirUsuario(usuario2);

        Usuario userInfo = usuarios.obtenerUsuario("Juan");
        // System.out.println(userInfo.nombre);
        System.out.println("Listando información de: " + userInfo.nombre);
        for (Vehiculo vehiculo : userInfo.vehiculos) {
            System.out.println(vehiculo.nombre);
        }
    }
}
