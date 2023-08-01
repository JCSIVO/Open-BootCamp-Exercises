package com.helloworld.helloworld;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

@SpringBootApplication
public class HelloworldApplication {

	public static void main(String[] args) {
		SpringApplication.run(HelloworldApplication.class, args);


		ApplicationContext context = new ClassPathXmlApplicationContext("beans.xml");
		saludar saludo = (saludar) context.getBean("saludar");


		String texto = saludo.holamundo();
		System.out.println(texto);
	}

}
