package com.example.patron.comportamiento.State;

public class EstadoBloqueado extends Estado{

    public EstadoBloqueado(Telefono telefono) {
        super(telefono);
    }
    
    @Override
    public String desbloquear() {
        telefono.cambiarEstado(new EstadoDesbloqueado(telefono));
        return "Desbloquear() Móvil desbloqueado, procede";
    }

    @Override
    public String abrirCamara() {
        return "abrircCamara(): La camara esta bloqueada. Desbloquea el movil antes";
    }

    @Override
    public String hacerFoto() {
        return "hacerFoto(): La camara esta bloqueada. Desbloquea el movil antes";
    }
}
