package com.ejercicio456.Ejercicio456;

import org.springframework.beans.factory.annotation.Value;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class HelloController {

    @Value("$(app.message)")
    String message;

    @GetMapping("/saludo")
    public String holamundo(){
        return "Hola mundo ¿que tal estaís?";
    }
}
