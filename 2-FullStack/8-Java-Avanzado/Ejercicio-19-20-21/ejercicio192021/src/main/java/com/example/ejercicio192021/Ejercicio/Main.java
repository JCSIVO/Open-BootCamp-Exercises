package com.example.ejercicio192021.Ejercicio;

import com.example.ejercicio192021.Ejercicio.exceptions.ParameterException;

public class Main {
    public static void main(String[] args) {

        try {
            
            //Para propositos de la prueba, vamos a crear nuestro propio args
            String[] arguments = {
                        "--minvalue", 
                        "50", 
                        "--maxvalue", 
                        "990",
                        "--compress",
                        "--hashcode",
                        "$23dsdf"};

            
            //Establecer parametros a partir de los argumentos recibidos
            AppParameters.parse(arguments);
            
            //Establecer valor (obtenido de otra fuente) para un parametro de
            // mi aplicacion
            String urlService = getUrlService();
            AppParameters.setParamValue(Parameters.PARAM_SERVICE_URL.getParamName(), 
                    urlService);
            
            //Lista parametros
            AppParameters.getKeyValueParametersList().forEach(System.out::println());
            
            /* Sample output
            
                Configured -> --maxvalue : 990
                Configured -> --hashcode : $23dsdf
                Configured -> --compress : http://servicio.net/api/v1
                Configured -> --minvalue : 50
                Default ----> --user : admin
                Default ----> --role : SUPERVISOR                        
            */
        
        } catch (ParameterException e) {
            System.out.println(e.getMessage());
        } catch (Exception ex){
            
        }
    }

    //Simula la obtencion de un dato de configuracion desde otra fuente
    private static String getUrlService() {
        return "http://servicio.net/api/v1";
    }
}


