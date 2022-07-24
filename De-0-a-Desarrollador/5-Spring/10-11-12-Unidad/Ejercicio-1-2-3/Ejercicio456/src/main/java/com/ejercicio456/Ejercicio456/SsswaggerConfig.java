/*package com.ejercicio456.Ejercicio456;

import java.util.*;
import java.util.ArrayList;



import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;


import springfox.documentation.builders.PathSelectors;
import springfox.documentation.builders.RequestHandlerSelectors;
import springfox.documentation.service.ApiInfo;
import springfox.documentation.service.Contact;
import springfox.documentation.service.VendorExtension;
import springfox.documentation.spi.DocumentationType;
import springfox.documentation.spring.web.plugins.Docket;



//Configuracion Swagger para la genereacion de documentos de la API REST
@Configuration
public class SwaggerConfig {
    
    @Bean
    public Docket apiDocket(){
        Contact contact = new Contact ("Jose","https://github.com/jcsivo","jose@example.com");
    

    List<VendorExtension> vendorExtensions = new ArrayList<>();
    
    
    
    ApiInfo apiInfo = new ApiInfo(
        "Spring Boot Laptops",
        "Laptops Api Rest docs",
        "1.0",
        "https://github.com/jcsivo",
        contact,
        "MIT", 
        "https://github.com/jcsivo",
        vendorExtensions);


        Docket docket = new Docket(DocumentationType.SWAGGER_2)
        .apiInfo(apiInfo)
        .select()
        .apis(RequestHandlerSelectors.any())
        .paths(PathSelectors.any())
        .build();

        return docket;
}
    
} 

*/