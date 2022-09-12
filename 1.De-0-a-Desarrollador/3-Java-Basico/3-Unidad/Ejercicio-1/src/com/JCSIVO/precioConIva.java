package com.JCSIVO;
import java.util.Scanner;

public class precioConIva {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Por favor introduce el precio: ");
        double numero = scanner.nextInt();
        calcularIva calcular = new calcularIva();
        double iva = calcular.obtenerIva(numero);
        double resultado = iva + numero;
        System.out.println("El precio con I.V.A es: " + resultado);

    }
}

class calcularIva{
    public double obtenerIva(double numero){
        return numero * 0.21;
    }
}