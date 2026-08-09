package com.ejercicio456.Ejercicio456.config;

import io.swagger.v3.oas.models.OpenAPI;
import io.swagger.v3.oas.models.info.Contact;
import io.swagger.v3.oas.models.info.Info;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

@Configuration
public class SwaggerConfig {

    @Bean
    OpenAPI api() {
        return new OpenAPI().info(new Info()
                .title("Spring Boot Laptops API REST")
                .description("Laptops Api rest docs")
                .version("1.0")
                .contact(new Contact()
                        .name("JCSIVO")
                        .url("https://github.com/jcsivo")));
    }
}