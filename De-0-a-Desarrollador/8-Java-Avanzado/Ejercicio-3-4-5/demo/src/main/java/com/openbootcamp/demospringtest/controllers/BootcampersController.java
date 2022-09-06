package com.openbootcamp.demospringtest.controllers;

import java.net.URI;
import java.util.List;

import javax.websocket.server.PathParam;
import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.Response;

import org.springframework.stereotype.Component;

import com.openbootcamp.demospringtest.models.Bootcamper;
import com.openbootcamp.demospringtest.services.BootcamperService;

@Component
@Path("/")
public class BootcampersController {
    private final BootcamperService bootcamperService;

    public BootcampersController(BootcamperService bootcamperService) {
        this.bootcamperService = bootcamperService;

        this.bootcamperService.add(new Bootcamper("uno", Math.random()));
        this.bootcamperService.add(new Bootcamper("dos", Math.random()));
        this.bootcamperService.add(new Bootcamper("tres", Math.random()));
        this.bootcamperService.add(new Bootcamper("cuatro", Math.random()));
        this.bootcamperService.add(new Bootcamper("cinco", Math.random()));
    }

    @GET
    @Path("/bootcampers")
    @Produces("application/json")
    public List <Bootcamper> listarTodos() {
    return bootcamperService.getAll();
    }

    @GET
    @Path("/bootcampers/{nombre}")
    @Produces("application/json")
    public Bootcamper listarUno(@PathParam("nombre") String nombre) {
        return bootcamperService.get(nombre);
    }

    @POST
    @Path("/bootcampers")
    @Produces("application/json")
    @Consumes("application/json")
    public Response meterBootcamper(Bootcamper bootcamper) {
        bootcamperService.add(bootcamper);

        return Response.created(
            URI.create("/bootcampers/" + bootcamper.getNombre())
        ). build();
    } 
}
