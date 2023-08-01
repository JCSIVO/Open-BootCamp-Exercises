package com.smartDevices;

public class SmartDevice {
    public static Object SmartPhone;
    String marca;
    String modelo;
    String color;
    int camara;

    public SmartDevice(){
    }

    public SmartDevice(String marca, String modelo, String color, int camara){
        this.marca = marca;
        this.modelo = modelo;
        this.color = color;
        this.camara = camara;
    }


    public static class SmartPhone extends SmartDevice{
        int ram;
        String SO;

        public SmartPhone(){
        }

        public SmartPhone(String marca, String modelo, String color, int camara, int ram, String SO){
            super(marca, modelo, color, camara);
            this.ram = ram;
            this.SO = SO;
        }
        @Override
        public String toString(){
            return "marca= " + marca + " ,modelo = " + modelo + " , color = " +color+ " , camara = " + camara+ " ,ram =" + ram+ " ,Sistema operativo = " + SO;
        }

    }

    public static class SmartWatch extends SmartDevice{
        double pulgadas;
        String conectividad;
        String pulsera;

        public SmartWatch(){

        }

        public SmartWatch(String marca, String modelo, String color, int camara) {
            super(marca, modelo, color, camara);
        }


        public SmartWatch(String marca, String modelo, String color, int camara, double pulgadas, String conectividad, String pulsera){
            super(marca, modelo,color, camara);
            this.pulgadas = pulgadas;
            this.conectividad = conectividad;
            this.pulsera = pulsera;
        }
        //para que no imprima el Hash y obtengamos los datos
        @Override
        public String toString(){
            return "marca= " + marca + " ,modelo = " + modelo + " , color = " +color+ " , camara = " + camara+ " ,pulgadas =" + pulgadas+ " ,conectividad = " +conectividad+ " , pulsera =" + pulsera;
        }
    }

        public void main (String[]args){
            SmartPhone iphone = new SmartPhone("Apple", "Iphone10", "Plateado", 5, 8, "IOS 15.5");
            SmartWatch xiaomi = new SmartWatch("Xiaomi", "Redmi5", "azul", 1, 3.4, "Bluetooh", "deportiva");

            System.out.println("ho me he comprado el SmartPhone: " + iphone + " junto con el SmartWach: " + xiaomi);
            System.out.println(iphone.marca);
        }
}



