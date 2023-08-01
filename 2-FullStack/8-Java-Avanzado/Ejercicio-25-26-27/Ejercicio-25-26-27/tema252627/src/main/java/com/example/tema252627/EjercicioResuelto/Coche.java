package com.example.tema252627.EjercicioResuelto;

public class Coche implements ICoche {
    private String marca;
    private String modelo;
    private int numPuertas;
    private int velocidad;

    public Coche(String marca, String modelo, int numPuertas) {
        this.marca = marca;
        this.modelo = modelo;
        this.numPuertas = numPuertas;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public int getNumPuertas() {
        return numPuertas;
    }

    public void setNumPuertas(int numPuertas) {
        this.numPuertas = numPuertas;
    }

    public int getVelocidad() {
        return velocidad;
    }

    public void setVelocidad(int velocidad) {
        this.velocidad = velocidad;
    }

    @Override
    public void acelerar() {
        velocidad++;
    }

    @Override
    public void frenar() {
        velocidad--;
    }

    @Override
    public String toString() {
        return "Data {" +
                "Tipo='" + this.getClass().getSimpleName() + '\'' +
                ", marca='" + marca + '\'' +
                ", modelo='" + modelo + '\'' +
                ",velocidad=" + velocidad +
                '}';
    }

    // Responsabilidad Simple
    public void exportarDatos() {
        ExportacionDatos exportacionDatos = new ExportacionDatos();
        exportacionDatos.exportar(this);
    }
}
