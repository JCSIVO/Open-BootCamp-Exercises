public class Main {
    public static void main(String[] args) {
        //System.out.println("Hello world!");

        //Condicionales

        int numeroIf = -2;
        //int numneroIf = 5;
        //int numeroIf = 0;

        if(numeroIf > 0){
            System.out.println("El " + numeroIf + " Es un numero positivo");
        } else if (numeroIf < 0) {
            System.out.println("El " + numeroIf + " Es un numero negativo");

        }else {
            System.out.println("El " + numeroIf + " Tiene el valor de  0");
        }


        //Bucle While
        int numeroWhile = 1;
        while (numeroWhile < 3){
            numeroWhile ++;
            System.out.println("La variable numeroWhile ahora vale: " + numeroWhile);
        }

        //Bucle Do While
        //Al crear una variable igual que la condicion y sumarle +1 se corta porque la condicion ya no la cumple
        int numeroDoWhile = 3;
        do {
             numeroDoWhile ++;
            System.out.println("La variable DoWhile vale: " + numeroDoWhile);
        }while (numeroWhile < 3);

        //Bucle For
        for(int numeroFor = 0; numeroFor <= 3; numeroFor++){
            System.out.println("La variable numeroFor vale: " + numeroFor);
        }

        //Bucle Switch Case
        String estacion = "Verano";
        // String estacion = "verano";
        // String estacion = "primavera";
        // String estacion = "otono";
        // String estacion = "invierno";
        // String estacion = "miercoles";

        switch (estacion){
            case "verano":
            case "Verano":
                System.out.println("Estamos en " + estacion);
                break;
            case "otoño":
            case "Otoño":
                System.out.println("Estamos en " + estacion);
                break;
            case "primavera":
            case "Primavera":
                System.out.println("Estamos en " + estacion);
                break;
            case "invierno":
            case "Invierno":
                System.out.println("Estamos en " + estacion);
                break;
            default:
                System.out.println("Por favor ingresa una estacion");

        }
    }
}