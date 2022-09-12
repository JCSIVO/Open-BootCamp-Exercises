package com.example.patron.comportamiento.Iterator;

public interface UsuarioIterator {
    // Hay mas usuarios en el iterador ??
    boolean hayMas();

    // Reinicia el contador (el iterador)
    void reinicia();

    // Obtiene el siguiente
    Usuario siguiente();
}
