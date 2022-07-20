package com.ejercicio456.Ejercicio456;

import java.time.LocalDate;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "Laptops")
public class Laptop {
    //atributos
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String marca;
    private String modelo;
    private Integer screenInch;
    private LocalDate builddate;
    private boolean stock;

    public Laptop(){

    }

    @Override
    public String toString() {
        return "laptop [builddate=" + builddate + ", id=" + id + ", marca=" + marca + ", modelo=" + modelo
                + ", screenInch=" + screenInch + ", stock=" + stock + "]";
    }

    public Laptop(Long id, String marca, String modelo, Integer screenInch, LocalDate builddate, boolean stock) {
        this.id = id;
        this.marca = marca;
        this.modelo = modelo;
        this.screenInch = screenInch;
        this.builddate = builddate;
        this.stock = stock;
    }


public Long getId() {
    return id;
}

public String getMarca() {
    return marca;
}

public String getModelo() {
    return modelo;
}

public Integer getScreenInch() {
    return screenInch;
}

public LocalDate getBuilddate() {
    return builddate;
}

public boolean isStock() {
    return stock;
}

public void setId(Long id) {
    this.id = id;
}

public void setMarca(String marca) {
    this.marca = marca;
}

public void setModelo(String modelo) {
    this.modelo = modelo;
}

public void setScreenInch(Integer screenInch) {
    this.screenInch = screenInch;
}

public void setBuilddate(LocalDate builddate) {
    this.builddate = builddate;
}

public void setStock(boolean stock) {
    this.stock = stock;
}

}
