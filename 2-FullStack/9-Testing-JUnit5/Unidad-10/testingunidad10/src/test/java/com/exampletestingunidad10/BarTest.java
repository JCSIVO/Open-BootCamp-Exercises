package com.exampletestingunidad10;

import static org.junit.Assert.assertEquals;
import static org.mockito.Mockito.mock;
import static org.mockito.Mockito.when;

import org.junit.Test;

public class BarTest {

    @Test
    public void ContarIngredientes() {
        // Bebida bebida = new Combinado();
        // Bebida bebida = mock(Combinado.class);
        // Bebida bebida = new Cerveza();
        // Bebida bebida  = mock(Cerveza.class);
        // Bebida bebida = new Cerveza();
        // Bebida bebida = new Combinado();
        Bebida bebida = mock(Cerveza.class);

        // when(bebida.contarIngredientes())
        //        .thenReturn(5);

        when(bebida.contarIngredientes())
                .thenCallRealMethod();

        Bar bar = new Bar(bebida);
        assertEquals(50, bar.contarIngredientes());
    }
}
