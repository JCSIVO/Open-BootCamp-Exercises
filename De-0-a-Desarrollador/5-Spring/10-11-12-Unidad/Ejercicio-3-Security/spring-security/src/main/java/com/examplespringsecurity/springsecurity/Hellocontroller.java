package com.examplespringsecurity.springsecurity;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;


@RestController
public class Hellocontroller {
    
    @GetMapping("/saludos")
    public String holamundo(){
        return "BUenas..Como se encuentran";
    }

    
}
