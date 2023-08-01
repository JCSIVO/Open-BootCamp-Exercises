package com.example.patron.comportamiento.State;

public class EstadoHacerFoto extends Estado{

    public EstadoHacerFoto(Telefono telefono) {
        super(telefono);
    }
    
    @Override
    public String desbloquear() {
        return "desbloquear(): Movil ya desbloqueado";
    }

    @Override
    public String abrirCamara() {
        return "abrirCamara(): La camara ya la habias abierto...";
    }

    @Override
    public String hacerFoto() {
        telefono.cambiarEstado(new EstadoBloqueado(telefono));
        return "La foto se ha hecho !!";
    }
}


