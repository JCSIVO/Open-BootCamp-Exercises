package com.interfaces;

public class CocheCRUDImpl implements CocheCRUD{
    @Override
    public String toString() {
        return "CocheCRUDImpl{" +
                "save='" + save + '\'' +
                ", fidAll='" + fidAll + '\'' +
                ", delete='" + delete + '\'' +
                '}';
    }

    @Override
    public void save() {

    }

    @Override
    public void findAll() {

    }

    @Override
    public void delete() {

    }
    String save = "Coche Guardado";
    String fidAll = "Coche localizado";
    String delete = "Coche eliminado";


}
