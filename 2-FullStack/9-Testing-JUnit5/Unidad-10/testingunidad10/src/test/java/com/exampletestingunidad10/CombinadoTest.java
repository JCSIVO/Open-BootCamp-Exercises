package com.exampletestingunidad10;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class CombinadoTest {
    @Test
    public void testContarIngredientes() {
        // Combinado combinado = new Combinado();
        CombinadoStub combinado = new CombinadoStub();
        int resultado = combinado.contarIngredientes();
        assertEquals(3, resultado);

        for (String cosa : combinado.getIngredientes()) {
            System.out.println("Cosa actual: " + cosa);
        }
    }
}
