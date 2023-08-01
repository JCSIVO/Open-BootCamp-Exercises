package com.example.tema252627.EjercicioResuelto;

public class CochesService {
    private CocheRepository repository;

    public CochesService(CocheRepository repository) {
        this.repository = repository;
    }

    public void guardar(Coche coche) {
        repository.save(coche);
    }
}
