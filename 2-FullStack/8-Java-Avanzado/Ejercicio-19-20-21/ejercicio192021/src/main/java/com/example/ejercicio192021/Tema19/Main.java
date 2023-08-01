package com.example.ejercicio192021.Tema19;

public class Main {
    public static void main(String[] args) {
        /*System.out.println("Parametros recibidos: " + args.length);

        for (String arg : args) {
            System.out.println("Argumento es: " + arg);
        }
        for (int i = 0; i < args.length; i++) {
            System.out.println("Argumento recibido: " + args[i] + " esta en la posición: " + i);
        }*/


        /*if (args[0].equalsIgnoreCase("uno")) {
            System.out.println("Hola!");
        } else if (args[0].equalsIgnoreCase("dos")) {
            System.out.println("Adios!");
        }*/


        // --opcion valor

        /*
            | --minval| 10| --maxval |100 |
            |    0    | 1 |    2     | 3  |
         */
        /*String opcionMinVal = args[0];
        int valorMinVal = Integer.valueOf(args[1]);
        System.out.println("Opcion: " + opcionMinVal + " valor: " + valorMinVal);

        String opcionMaxVal = args[2];
        int valorMaxVal = Integer.valueOf(args[3]);
        System.out.println("Opcion: " + opcionMaxVal + " valor: " + valorMaxVal );*/

        /*int opcionMinVal = 0;
        int opcionMaxVal = 0;
        String opcionNombre = " ";

        for (int i = 0; i < args.length; i++) {
            switch (args[i]) {
                case "--minval":
                    opcionMinVal = Integer.parseInt(args[i + 1]);
                    i++;
                    break;
                case "--maxval":
                    opcionMaxVal = Integer.parseInt(args[i + 1]);
                    i++;
                    break;
                case "--nombre":
                    opcionNombre = args[i + 1];
                    i++;
                    break;
            }
        }
        System.out.println("Valor de minval es: " + opcionMinVal);
        System.out.println("Valor de maxval es: " + opcionMaxVal);
        System.out.println("Valor de nombre es: " + opcionNombre);*/

        OptionsParser optionsParser = new OptionsParser(args);
        optionsParser.registerOption("minval");
        optionsParser.registerOption("maxval");
        optionsParser.registerOption("nombre");
        optionsParser.parse();

        /*String minVal = optionsParser.getOption("minval");
        System.out.println("Minval es: " + minVal);

        String maxVal = optionsParser.getOption("maxVal");
        System.out.println("maxVal es: " + maxVal);
        
        String nombre = optionsParser.getOption("nombre");
        System.out.println("nombre es: " + nombre);*/

        int maxVal = Integer.parseInt(optionsParser.getOption("maxval"));
        int minVal = Integer.parseInt(optionsParser.getOption("minVal"));

        for (int i = minVal; i <= maxVal; i++) {
            System.out.print(i + " ");
        }

        // Librearias importantes 
        // http://commons.apache.org/cli/ - Apache Commons CLI
        // http://www.martiansoftware.com/jsap - JSAP
    }

    /*public static demoACCLI(String []args) {
        Options option = new Options();

        Option maxVal = new Option("m", "maxval", true, "Valor máximo");
        maxVal.setRequired(true);

        options.addOption(maxval);

        CommandLineParser parser = new CommandLineParser();
        HelpFormatter helpFormatter = new HelpFormatter();
        CommandLine cmd = null;

        try {
            cmd = parser.parse(options, args);
        } catch (Exception e) {
            
        }

        String miMaxVal = Integer.parseInt(cmd.getOptionValue("maxval"));
        System.out.println("Mi max val es: " + miMaxVal);
    }*/
}
