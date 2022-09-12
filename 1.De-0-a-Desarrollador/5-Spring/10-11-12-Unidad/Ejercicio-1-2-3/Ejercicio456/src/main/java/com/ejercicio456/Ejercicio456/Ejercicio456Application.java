package com.ejercicio456.Ejercicio456;

import java.time.LocalDate;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.ApplicationContext;



@SpringBootApplication
public class Ejercicio456Application {

	public static void main(String[] args) {
		ApplicationContext context = SpringApplication.run(Ejercicio456Application.class, args);
		LaptopRepository repository = context.getBean(LaptopRepository.class);

		Laptop laptop1 =  new Laptop(null, "Toshiba","Winf",15,LocalDate.of(2013,8,17),true );
		Laptop laptop2 =  new Laptop(null, "Lenovo","XDE456",17,LocalDate.of(2017,02,20),false );
		Laptop laptop3 =  new Laptop(null, "MackBookAir","PO987YHG",20,LocalDate.of(2022,01,20),true );

		repository.save(laptop1);
		repository.save(laptop2);
		repository.save(laptop3);

		System.out.println("Numeros de portatiles en Base de datos: " +repository.findAll().size());

	}

	

}
