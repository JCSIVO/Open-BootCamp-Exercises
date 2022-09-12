package com.ejercicio456.Ejercicio456;

import java.util.List;
import java.util.Optional;


import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import io.swagger.annotations.ApiOperation;

import org.springframework.web.bind.annotation.PutMapping;


@RestController
public class LaptopController {

    private LaptopRepository laptopRepository;


    

    public LaptopController(LaptopRepository laptopRepository) {
        this.laptopRepository = laptopRepository;
    }


    //Buscar todos los laptops

    @GetMapping("/api/laptops")
    @ApiOperation("Buscar todos los Laptops")
    public List<Laptop> findAll(){
        return laptopRepository.findAll();
    }


    //Buscar un laptops por su ID

    @GetMapping("/api/laptops/{id}")
    @ApiOperation("Buscar los Laptops por ID")
    public ResponseEntity<Laptop> findOneById(@PathVariable Long id){
        Optional<Laptop> laptopopt = laptopRepository.findById(id);
        if(laptopopt.isPresent())
            return ResponseEntity.ok(laptopopt.get());
        else
            return ResponseEntity.notFound().build();
    }


    //crear un nuevo laptops en la base de datos


    @PostMapping("/api/laptops")
    @ApiOperation("Insertar un nuevo Laptops")
        public ResponseEntity <Laptop> create(@RequestBody Laptop laptop) {
            if(laptop.getId() != null) {
                return ResponseEntity.badRequest().build();
            }

            Laptop result = laptopRepository.save(laptop);
            return ResponseEntity.ok(result);
        }

    
    // Actualiazar un laptops existente en la base de datos

    @PutMapping("/api/laptops")
    @ApiOperation("Actualizar los Laptops")
    //@ApiOperation("Actualizar un libro existente")
    public ResponseEntity <Laptop> update(@RequestBody Laptop laptop) {
        if(laptop.getId()==null){
            return ResponseEntity.badRequest().build();
        }
        if(!laptopRepository.existsById(laptop.getId())){
            return ResponseEntity.notFound().build();
        }
        Laptop result = laptopRepository.save(laptop);
        return ResponseEntity.ok(result);
    }


    //Borrar un laptops

    @DeleteMapping("/api/laptops/{id}")
    @ApiOperation("Borra los Laptops")
    public ResponseEntity<Laptop> deleteById(@PathVariable Long id){
        if(!laptopRepository.findById(id).isPresent()){
            return ResponseEntity.notFound().build();
        }
        laptopRepository.deleteById(id);
        return ResponseEntity.noContent().build();
    }


    //Borrar todos los laptops
    @DeleteMapping("/api/laptops")
    @ApiOperation("Borra todos los Laptops")
    public ResponseEntity<Laptop>deleteAll(){
        laptopRepository.deleteAll();
        return ResponseEntity.noContent().build();
        }

}