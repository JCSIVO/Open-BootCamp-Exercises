package com.example.singleton.Decorator;

public class TelefonoDecorator implements Telefono {
    private Telefono telefono;

    public TelefonoDecorator(Telefono telefono) {
        this.telefono = telefono;
    }
    
    @Override
    public void crear(){
        this.telefono.crear();
    }
}
