package com.example.singleton.Decorator;

public class TelefonoBasico implements Telefono {
    @Override
    public void crear() {
        System.out.println("Soy un telefono básico. Tengo estas caracteristicas: " );
        tengoGSM();
        tengoSMS();
    }

    private void tengoGSM() {
        System.out.println(" -> Básico: Tengo GSM");
    }

    private void tengoSMS() {
        System.out.println(" -> Básico: Tengo SMS");
    }
}
