package com.example.patron.comportamiento.Observer;

import java.util.ArrayList;

public class Emisora {
    private ArrayList<Receptor> receptor =  new ArrayList();

    public void meteReceptor(Receptor receptor) {
        this.receptor.add(receptor);
    }

    public void emite() {
        for (Receptor receptor : receptor) {
            receptor.recibe();
        }
    }
}
