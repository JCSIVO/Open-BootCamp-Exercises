package com.example.unidad6.curso;

import org.junit.jupiter.api.Order;
import org.junit.jupiter.api.Tag;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.condition.DisabledIf;
import org.junit.jupiter.api.condition.DisabledIfEnvironmentVariable;
import org.junit.jupiter.api.condition.DisabledIfSystemProperty;
import org.junit.jupiter.api.condition.DisabledOnJre;
import org.junit.jupiter.api.condition.DisabledOnOs;
import org.junit.jupiter.api.condition.EnabledForJreRange;
import org.junit.jupiter.api.condition.EnabledIf;
import org.junit.jupiter.api.condition.EnabledIfEnvironmentVariable;
import org.junit.jupiter.api.condition.EnabledIfSystemProperties;
import org.junit.jupiter.api.condition.EnabledIfSystemProperty;
import org.junit.jupiter.api.condition.EnabledOnJre;
import org.junit.jupiter.api.condition.EnabledOnOs;
import org.junit.jupiter.api.condition.JRE;
import org.junit.jupiter.api.condition.OS;
import org.junit.platform.suite.api.ExcludeTags;

// @Tag("prod")
@ExcludeTags("produccion")
public class operacionesTest {
    @Test
    @Order(2)
    // @EnabledOnOs({ OS.LINUX, OS.MAC })
    // @EnabledOnOs({ OS.WINDOWS })
    // @DisabledOnOs(OS.WINDOWS)
    // @EnabledOnJre({ JRE.JAVA_17, JRE.JAVA_18 })
    // @DisabledOnJre(JRE.JAVA_16)
    // @EnabledForJreRange(min = JRE.JAVA_11, max = JRE.JAVA_14)
    // @EnabledIfEnvironmentVariable(named = "os.name", matches = "Mac OS X") // igual que linea 16
    // @EnabledIfEnvironmentVariable(named = "os.arch", matches = ".*64.*")
    // @EnabledIfSystemProperty(named = "os.arch", matches = "x86_64")
    // @DisabledIfSystemProperty(named = "os.arch", matches = "x86_64")
    // @EnabledIfSystemProperties({ }, { })
    // @EnabledIfEnvironmentVariable(named = "os.arch", matches = "x86_64")
    // @DisabledIfEnvironmentVariable(named = "os.arch", matches = "x86_64")
    // @EnabledIf("curso.operacionesCondition#mustBeRun")
    // @DisabledIf("condicion")
    @Tag("produccion")
    void verificarSuma() { 
        /*for (String actual : System.getProperties().stringPropertyNames()) {
            System.out.println(actual + ": " + System.getProperty(actual));
        }
        // System.out.println("Estoy en un test para macOS");
        System.out.println(System.getProperty("os.arch"));
        // x86_64 -> Intel / AMD
        // arm64 -> ARM
        // sparc64 -> SPARC*/
        System.out.println("Estoy en verificarSuma()");
    }

    @Test
    @Order(1)
    @Tag("incidencia-XXXX")
    @Tag("desarrollo")
    void verificarResta() {
        System.out.println("Estoy en verificarResta()");
    }
}
