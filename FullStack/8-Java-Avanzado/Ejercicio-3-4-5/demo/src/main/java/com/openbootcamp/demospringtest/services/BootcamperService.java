package com.openbootcamp.demospringtest.services;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Service;

import com.openbootcamp.demospringtest.models.Bootcamper;

@Service
public class BootcamperService {
    private final List<Bootcamper> bootcampers = new ArrayList<>();

    public List<Bootcamper> getAll() {
        return bootcampers;
    }

    public void add(Bootcamper bootcamper) {
        bootcampers.add(bootcamper);
    }

    public Bootcamper get(String nombre) {
        for (Bootcamper bootcamper : bootcampers) {
            if (bootcamper.getNombre().equalsIgnoreCase(nombre)) {
                return bootcamper;
            }
        }
        return null;
    }
}
