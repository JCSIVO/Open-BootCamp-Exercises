"use strict";
class Singleton {
    constructor() { }
    static getInstace() {
        if (!Singleton.instance) {
            Singleton.instance = new Singleton(); // Se crea la única instancia compartida a nivel de aplicación
        }
        return Singleton.instance;
    }
    mostrarPorConsola() {
        console.log("Método del Singleton");
    }
}
//# sourceMappingURL=Singleton.js.map