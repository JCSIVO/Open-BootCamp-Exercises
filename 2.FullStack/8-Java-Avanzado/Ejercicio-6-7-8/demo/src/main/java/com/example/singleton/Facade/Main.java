package com.example.singleton.Facade;

import java.io.File;

public class Main {
    public static void main(String[] args) {
        VideoConversionFacade conversor = new VideoConversionFacade();
        conversor.convertVideo("fichero.orgg", "mp4");
    }
}

