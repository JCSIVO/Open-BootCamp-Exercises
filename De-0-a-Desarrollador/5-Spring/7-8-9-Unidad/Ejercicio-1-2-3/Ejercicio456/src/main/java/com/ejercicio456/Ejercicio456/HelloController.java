package com.ejercicio456.Ejercicio456;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class HelloController {

    @GetMapping("/saludo")
    public String holamundo(){
        return "Hola mundo ¿que tal estaís?";
    }
}
