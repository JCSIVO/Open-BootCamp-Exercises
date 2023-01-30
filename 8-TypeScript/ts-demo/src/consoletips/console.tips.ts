// Console Log

import { Console } from "console";

console.log("Hola");


let lista = ["Uno", "Dos", "Tres"];

lista.forEach((valor) => console.log);
lista.forEach(( ) => console.log);

let nombre = "JCSivo";
console.log(`Hola, ${nombre}`);

// Console Clear -> Borrar o vaciar la consola
console.clear(); 


// Console Assert -> Mostrar por consola si algo es ó no verdad

var a: number = 100;
console.assert(a === 1000, "Mensaje", `Otro mensaje: ${a}`);


// Console Count -> Contador
function contador(texto: string) {
    console.count(texto); // muestra las veces que se a recibido
}

contador("Hola"); // 1
contador("Adiós"); // 1

contador("Hola"); // 2

console.countReset(); // resetear el contador


// Console Info, Warn o Error
// Sirve para añadir estilo a las salidas (azul, amarillo o rojo) para detectar facilmente los problemas
console.info("Texto Informativo");
console.warn("Texto de aviso");
console.error("Texto de error");

// Console  Trace -> Sirve para trazar determinadas ejecuciones 

function uno() {
    dos();
}

function dos(){
    tres();
}

function tres() {
    console.trace(); // Trazar por donde se ha ido ejecutando para llegar a este punto
}


uno(); // inicia el trace por consola


// Console DIR -> Mostrar valores de objetos de manera bonita

let coche = {
    nombre: "Audi",
    matricula: "815432",
    especificaciones: [
        {
            motor: "V12",
            potencia: "320CV"
        }
    ]
}

console.dir(coche);


// Otra opción seria mostrarlo en formato tabla
// Console Table --> Mostrar objetos o listas en tablas

console.table(coche);


// Console.time --> Contabilizar el tiempo de ejecución

function espera() {
    for (let index = 0; index < 1000; index++) {
        // ...
        
    }
}

console.time("Prueba"); // Se inicia el cronómetro
espera();
console.timeEnd("Prueba"); // terminar y contabilizar el tiempo que ha pasado


// Console.group --> Agrupaciones de console
console.group("Números");
console.log("1");
console.log("2");
console.log("3");
console.log("4");
console.groupEnd();







