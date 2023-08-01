package com.example.patron.comportamiento.Refactor;

// Se refactoria extrayendo variables

public class Main {
    public static void main(String[] args) {
        esOracleJavaEnMacOS();
        System.out.println(System.getProperty("java.runtime.name"));
        System.out.println(System.getProperty("os.version"));

    }

    public static boolean esOracleJavaEnMacOS() {
        /*if (System.getProperty("java.runtime.name").contains("Oracle")
        && System.getProperty("os.version").compareTo("11.6") == 0 ? true : false) {
            return true;
        }
        return false;*/


        boolean runtimeOracle = System.getProperty("java.runtime.name").contains("Oracle");
        boolean osVersion = System.getProperty("os.version").compareTo("11.6") == 0 ? true : false;

        if (runtimeOracle && osVersion) {
            System.out.println("es Oracle JVM en MacOS 11.6");
            return true;
        }
        return false;
    }


}
