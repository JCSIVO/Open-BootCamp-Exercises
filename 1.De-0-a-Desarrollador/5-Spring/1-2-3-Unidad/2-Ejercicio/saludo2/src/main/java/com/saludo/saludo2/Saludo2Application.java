package com.saludo.saludo2;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

@SpringBootApplication
public class Saludo2Application {

	public static void main(String[] args) {
		SpringApplication.run(Saludo2Application.class, args);

		ApplicationContext context = new ClassPathXmlApplicationContext("beans.xml");
		UserService usuario = (UserService) context.getBean("userService");

		
		usuario.getnotification().notification();
	}

}
