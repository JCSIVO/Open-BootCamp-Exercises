package com.example.ejercicio192021.Ejercicio;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import com.example.ejercicio192021.Ejercicio.exceptions.ParameterException;
import com.example.ejercicio192021.Ejercicio.exceptions.ParameterNotFoundException;
import com.example.ejercicio192021.Ejercicio.exceptions.ParameterNotReceivedException;
import com.example.ejercicio192021.Ejercicio.exceptions.ParameterTypeConversionException;
       /**
        * 
        * Clase final contenedora de los parametros de la aplicacion
        * - Se apoya en clase Enum "Parameters"
        *
        * - Permite definir valores por defecto para algunos parametros
        * - Permite parsear un array de strings ( args , por ejemplo )
        * - Ademas permite setear parametros y sus valores manualmente
        * - Permite obtener valor para un parametro puntual, en diferentes formatos
        * como String, Integer, Long o Boolean.
        * - Permite saber si un parametro existe (Esta configurado), lo cual es util
        * para parametros de tipo flag.
        * - Permite obtener la lista de parametros configurados, indicando
        * si se trata de un parametro con valor establecido o con un valor por
        * defecto.
        * 
        */
       public final class AppParameters{

              private static final String FLAG_PARAMETER = "N/A";
       
        /* Default parameters */
              private static final HashMap<String, String> defaultValues = new HashMap<>();
              static {
              defaultValues.put(Parameters.PARAM_MIN_VALUE.getParamName(), "1");
              defaultValues.put(Parameters.PARAM_MAX_VALUE.getParamName(), "100");
              defaultValues.put(Parameters.PARAM_COMPRESS.getParamName(), FLAG_PARAMETER);
              defaultValues.put(Parameters.PARAM_SERVICE_USER.getParamName(), "admin");
              defaultValues.put(Parameters.PARAM_SERVICE_USER_ROLE.getParamName(), "SUPERVISOR");
              }
              
              /* Parametros configurados por parseo de arguments - args[] o manualmente con setParamValue*/
              private static final HashMap<String, String> values = new HashMap<>();
              
        //Establece valor para un parametro
        // De haber un valor por defecto para este parametro se quita de la lista
        // defaultValues
              public static final void setParamValue(String paramName, String paramValue){
              if (values.containsKey(paramName)){
              values.replace(paramName, paramValue);
       }

              values.put(paramName, paramValue);
       
              if (defaultValues.containsKey(paramName)){
              defaultValues.remove(paramName);
              } 
              }
       
       /* Indicates if a parameter is present, either because it was set when the 
        application started or because it is configured with a default value. */
       public static final boolean existParam(String paramName){
       return values.containsKey(paramName) || defaultValues.containsKey(paramName);
       }
       
        //Parameter value
       public static final String getParamStringValue(String paramName) throws 
       ParameterException{
       if (values.containsKey(paramName)){
       return values.get(paramName);
       }else if (defaultValues.containsKey(paramName)){
       return defaultValues.get(paramName); 
       }else{
       throw new ParameterNotFoundException("Parameter " + 
       paramName + " not registerd");
       } 
       } 
       
        //Parameter value to Integer
       public static final Integer getParamIntegerValue(String paramName) throws 
       ParameterException{
       try {
       if (values.containsKey(paramName)){
       return Integer.parseInt(values.get(paramName));
       }else if (defaultValues.containsKey(paramName)){
       return Integer.parseInt(defaultValues.get(paramName));
       }else{
       throw new ParameterNotFoundException("Parameter '" + 
       paramName + "' not registerd");
       } 
       } catch (NumberFormatException e) {
       throw new ParameterTypeConversionException("Cannot convert parameter '" + 
       paramName + "' to Integer");
       } 
       }

        //Parameter value to Long
       public static final Long getParamLongValue(String paramName) throws 
       ParameterException{
       try {
       if (values.containsKey(paramName)){
       return Long.parseLong(values.get(paramName));
       }else if (defaultValues.containsKey(paramName)){
       return Long.parseLong(defaultValues.get(paramName));
       }else{
       throw new ParameterNotFoundException("Parameter '" + 
       paramName + "' not registerd");
       } 
       } catch (NumberFormatException e) {
       throw new ParameterTypeConversionException("Cannot convert parameter '" + 
       paramName + "' to Long");
       } 
       } 
       
        //Parameter value Boolean
       public static final Boolean getParamBooleanValue(String paramName) throws ParameterException{
       if (values.containsKey(paramName)){
       return Boolean.parseBoolean(values.get(paramName));
       }else if (defaultValues.containsKey(paramName)){
       return Boolean.parseBoolean(defaultValues.get(paramName)); 
       }else{
       throw new ParameterNotFoundException("Parameter " + paramName + " not registered");
       } 
       }
       
        //List of parameters with it configured or default values
       public static List<String> getKeyValueParametersList(){
       ArrayList<String> response = new ArrayList();
       String line;
       
       for (Map.Entry<String, String> entry : values.entrySet()) {
       String key = entry.getKey();
       String value = entry.getValue();
       line = "Configured -> " + key + " : " + value;
       response.add(line);
       }

       for (Map.Entry<String, String> entry : defaultValues.entrySet()) {
       String key = entry.getKey();
       String value = entry.getValue(); 
       line = "Default ----> " + key + " : " + value;
       response.add(line);
       } 
       return response;
       }
       
        //Parameter parser method that takes as input the list of parameters (Parameters Enum) 
        // and processes the array of received arguments to complete values hashmap.
       public static void parse(String[] argsReceived) throws ParameterException{
        //args = argsReceived;
       for (Parameters param : Parameters.values()){
       if (param.isKeyValueParam()){
       String value = getArgsParamValue(argsReceived, param.getParamName());
       if (value.equals("")){
       if (!defaultValues.containsKey(param.getParamName()
       .toLowerCase())){
       throw new ParameterNotReceivedException("Parametro '" + 
       param.getParamName() + "' no recibido"); 
       }
       }else{
       setParamValue(param.getParamName(), value);
       }
       }else{
       if (isParameterReceived(argsReceived, param.getParamName())){
       setParamValue(param.getParamName(), FLAG_PARAMETER);
              }
              }
              } 
              }
       
        //Private method: Indicates whether a parameter is in the argument list
       private static boolean isParameterReceived(String[] args, String paramName){
       for (String arg : args) {
       if (arg.equalsIgnoreCase(paramName)) {
       return true;
       }
       }
       return false;
       }

        //Private method: Return the value of a key-value parameter
       private static String getArgsParamValue(String[] args, String paramName){ 
       for(int i=0; i < args.length; i++){
       if (args[i].equalsIgnoreCase(paramName)){
       if(i < args.length){
       return args[i+1];
       }
       }
       } 
       return "";
       } 
       
       
       private AppParameters(){} 
       
       }
