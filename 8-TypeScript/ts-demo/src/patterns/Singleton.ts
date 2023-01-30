class Singleton {
    private static instance: Singleton;

    private constructor() { }

    public static getInstace(): Singleton {
        if (!Singleton.instance) {
            Singleton.instance = new Singleton(); // Se crea la única instancia compartida a nivel de aplicación
        }

        return Singleton.instance;
    }

    public mostrarPorConsola() {
        console.log("Método del Singleton");
    }
}