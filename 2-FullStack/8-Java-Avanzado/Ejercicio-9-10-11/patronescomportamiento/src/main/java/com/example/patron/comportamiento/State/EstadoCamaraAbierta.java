package com.example.patron.comportamiento.State;


public class EstadoCamaraAbierta extends Estado{

    public EstadoCamaraAbierta(Telefono telefono) {
        super(telefono);
    }
    
    @Override
    public String desbloquear() {
        return "desbloquear(): Ya estaba desbloqueado el movil!!! ";
    }

    @Override
    public String abrirCamara() {
        return "abrirCamara(): LA CAMARA YA LA HABIAS ABIERTO !!";
    }

    @Override
    public String hacerFoto() {
        telefono.cambiarEstado(new EstadoHacerFoto(telefono));
        return "hacerfOTO(): la foto se va a disparar ya...";
    }
}

