package com.exampletestingunidad10;

public class CombinadoStub extends Combinado{
    
    @Override
    public int contarIngredientes() {
        // System.out.println("Probando Ingredientes....");
        // System.out.println("Valor real: " + super.contarIngredientes());
        return 3;
    }
}
