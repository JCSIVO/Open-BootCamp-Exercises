package com.ejercicio456.Ejercicio456.config;


import java.util.*;


import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.bind.annotation.RequestMapping;

import springfox.documentation.builders.PathSelectors;
import springfox.documentation.builders.RequestHandlerSelectors;
import springfox.documentation.service.ApiInfo;
import springfox.documentation.service.Contact;
import springfox.documentation.spi.DocumentationType;
import springfox.documentation.spring.web.plugins.Docket;
import springfox.documentation.swagger2.annotations.EnableSwagger2;



@Configuration
@EnableSwagger2
public class SwaggerConfig {

    @Bean
    Docket api() {
        return new Docket(DocumentationType.SWAGGER_2)
                .apiInfo(apiDetails())
                .select()
                .apis(RequestHandlerSelectors.any())
                .paths(PathSelectors.any())
                .build();
            }
            



    
    private ApiInfo apiDetails(){
        return new ApiInfo("Spring Boot Laptops API REST",
        "Laptops Api rest docs",
        "1.0",
        "https://github.com/jcsivo",
        new Contact("Jcsivo", "https://github.com/jcsivo", "jc@example.com"),
        "MIT2.0", 
        "https://www.google.es",
        Collections.emptyList());
    }

}
