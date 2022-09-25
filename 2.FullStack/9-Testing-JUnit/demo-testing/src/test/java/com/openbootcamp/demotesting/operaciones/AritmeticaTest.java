package com.openbootcamp.demotesting.operaciones;

import static org.junit.Assert.assertThrows;
import static org.junit.jupiter.api.Assertions.assertAll;
import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.junit.jupiter.api.Assertions.assertTrue;
import static org.junit.jupiter.api.Assumptions.assumeTrue;

import java.io.IOException;

import org.junit.jupiter.api.AfterAll;
import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.RepeatedTest;
import org.junit.jupiter.api.RepetitionInfo;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.params.ParameterizedTest;
import org.junit.jupiter.params.provider.ValueSource;
import org.junit.jupiter.params.shadow.com.univocity.parsers.annotations.Validate;

public class AritmeticaTest {
    Aritmetica aritmetica = new Aritmetica();

    @BeforeAll
    static void init() {
        System.out.println("Antes de los test");
    }

    @BeforeEach
    void before() {
        System.out.println("Antes del test actual");
    }

    @AfterEach
    void afterEach() {
        System.out.println("Despues del test actual");
    }

    @AfterAll
    static void after() {
        System.out.println("Tests finalizados");
    }

    @Test
    void probar2mas2() {
        aritmetica.suma(2, 2);
    }

    @Test
    void probar4mas4() {
        String os = System.getProperty("os.name");
        assumeTrue(os.equalsIgnoreCase("MAC OS X"));
        Throwable excepcion = assertThrows(IOException.class, () -> aritmetica.falladora());
    }
}
