// Esto es un comentario en TS

import { Worker } from "cluster";
import { type } from "os";
import { deleteAllCookies, deleteCookie, getCookieValue, setCookie } from 'cookies-utils';
import { Curso } from "./models/Curso";
import { Estudiante } from "./models/Estudiante";
import { LISTA_CURSOS } from "./mock/cursos.mock";
import { Trabajador, Jefe } from "./models/Persona";
import { ITarea, Nivel } from "./models/interfaces/ITarea";
import { Programar } from "./models/Programar";



/**
 * Esto es un comentario 
 * Multilínea 
 */


console.log("Hola TypeScript");
console.log("Hola JCSivo");


// Declaración de Variables:
var nombre = "JCSivo";
var nombre1 = 'Isabel';
var nombre2: string = "Juan";

console.log("Hola, " + nombre);
console.log("¿Que tal?", nombre1, "?");
console.log(`¿Como han ido las vacaciones, ${nombre} ?`);

let email = "jcsivo@email.com" // Variable de ámbito local
console.log(`El Email de ${nombre} es ${email}`);

const PI = 3.1416;
const Pi: number = 3.1312;
// PI = PI + 1 ; Estas variables no son modificables 


var apellidos: any = "sanchez lopex"; // Tipo any hace que la variable pueda cambiar de tipo
apellidos = 3;

var error: boolean;
error = false;


console.log(`¿Hay error?: ${error}`);

// Instanciación múltiple de variables

let a:string,b:boolean,c:number; // instacia 3 variables sin valor inicial

a = "TypeScript"; 
b = true;
c = 9.8;

// c:string = "" -> No se puede llevar a cabo

// BuiltIn Types: number, string, boolean, void, null y undefined 


// Tipos más complejos

// Listas de cadenas de texto
let listatareas:string[] = ["Tarea1", "Tarea2", "Tarea3"];

// Combinación de tipos en listas
let valores: (string | number | boolean)[] = [false, "Hola", true, 56];

// Enumerados

enum Estados {
    "Completado" = "C",
    "Incompleto" = "I",
    "Pendiente" = "P"
}

enum PuestoCarrera {
    "Primero" = 1,
    "Segundo",
    "Tercero"
}

let estadoTareas: Estados = Estados.Completado;
let puestoMaraton: PuestoCarrera = PuestoCarrera.Segundo


// Interfaces

interface Tarea {
    nombre: String,
    estado: Estados,
    urgencia: number
}

// podemos crear variables que sigan la interface Tarea

let tarea1: Tarea = {
    nombre: "Tarea 1",
    estado: Estados.Pendiente,
    urgencia: 10
}

console.log(`Tarea: ${tarea1.nombre}`);

// Asignación múltiple de variables 

let miTarea = {
    titulo: 'Mi tarea',
    estado: Estados.Completado,
    urgencia: 1
}

// Declaración 1 a 1 
let miTitulo = miTarea.titulo;
let miEstado = miTarea.estado;
let miUrgencia = miTarea.urgencia;

// ** Factor Spread (Propagación)

// En asignación de variables  
let {titulo, estado, urgencia} = miTarea;

// En listas
let listaCompraLunes: string[] = ["Huevos", "Patatas"];
let listaCompraMartes: string[] = [...listaCompraLunes, "Pan", "Leche"];
let listaCompraMiercoles: string[] = ["Carne", "Pescado"]; 
let listaCompraSemana: string [] = [...listaCompraLunes, ...listaCompraMiercoles];


// En objetos

let estadoApp = {
    usuario: "admin",
    session: 3,
    jwt: "Bearer12836112783"
}

// Cambiar un valor por progagación 
let nuevoEstado = {
    ...estadoApp,
    session: 4
}

// Types de TypeScript
type Producto = {
    precio: number,
    nombre: string,
    anio: number
}

let coche: Producto = {
    nombre: "Audi",
    precio: 36000,
    anio: 2021
}


// ** Condicionales

// Operadores ternarios
console.log(coche.anio < 2010 ? `Coche: ${coche.nombre} es viejo` : `Coche: ${coche.nombre} es nuevo`);


// If - else
if(error){
    console.log("Hay un error");
}else {
    console.log("No hay error");
}

// IF - else if - else
if(coche.anio < 2010){
    console.log(`Coche: ${coche.nombre} es viejo`);
}else if (coche.anio === 2010) {
    console.log(`Coche: ${coche.nombre} es del 2010`);
}else {
    console.log(`Coche: ${coche.nombre} es nuevo`);
}


// Switch
switch (tarea1.estado) {
    case Estados.Completado:
        console.log("La tarea está completada");
        break;
    case Estados.Incompleto:
        console.log("La tarea no está completada");
        break;
    case Estados.Pendiente:
        console.log("La tarea está pendiente de comprobarse");
        break;
    default:
        break;
}


/*try {
    
} catch (error) {
    
}*/


// ** Bucles

let listaTareasNueva: Tarea[] = [
    {
        nombre: "Tarea 1",
        estado: Estados.Completado,
        urgencia: 2
    },
    {
        nombre: "Tarea 2",
        estado: Estados.Pendiente,
        urgencia: 0
    },
    {
        nombre: "Tarea 3",
        estado: Estados.Incompleto,
        urgencia: 15
    }
]


// For Clásico

for (let index = 0; index < listaTareasNueva.length; index++) {
    const tarea = listaTareasNueva[index];
    console.log(`${index} - ${tarea.nombre}`);
}

// Foreach 
listaTareasNueva.forEach(
    (tarea: Tarea, index: number) => {
        console.log(`${index} - ${tarea.nombre}`);
    }
);

/*
for (const key in tarea1) {
    if (Object.prototype.hasOwnProperty.call(tarea1, key)) {
        const element = tarea1[key];     
    }
}*/

/*
for (const tarea in listaTareasNueva){
    console.log(`${tarea.nombre}`);
}*/


// Bucles While

while (tarea1.estado !== Estados.Completado) {
    if (tarea1.urgencia == 20) {
        tarea1.estado = Estados.Completado;
        break;
    } else {
        tarea1.urgencia ++;
    }
}


// DO While (Se ejecuta al menos una vez)
do {
    tarea1.urgencia ++;
    // tarea1.estado = Estados.Pendiente; //Crea un bucle infinito 
    tarea1.estado = Estados.Completado;
} while (tarea1.estado !== Estados.Completado);



// Funciones 

/**
 * Funcioón que muestra un saludo por consola
 */

function saludar() {
    let nombre = "JCsIVO";
    console.log(`¡Hola, ${nombre}!`);
};


// Invocación de la función 
saludar();


/**
 * Funcioón que muestra un saludo por consola a una persona
 * @param nombre Nombre de la persona a saludar 
 */
function saludarPersona(nombre:string){ // con string no funciona los int pero si lo tipas any SI
    console.log(`¡Hola, ${nombre}!`);
};

saludarPersona("JCSivo");
// saludarPersona(2);  -> No te lo permite hacer por el tipado string si lo haces any si que lo permite

// const persona = "JCSivo";
// saludarPersona(persona);


/**
 * Funcioón que muestra un adios por consola a una persona
 * @param nombre Nombre de la persona a depedir, por defecto sera Isabel
 */
function despedirPersona(nombre: string = "Isabel") {
    console.log(`Adios, ${nombre}`);
}

despedirPersona(); // Adios Isabel
despedirPersona("Alba"); // Adios Alba


/**
 * Funcioón que muestra un adios por consola a una persona
 * @param nombre (Opcional) Nombre de la persona a depedir
 */
function despedidaOpcional(nombre?: string) { // esta es la misma sixtaxtis nombre | undefined
    if(nombre) {
        console.log(`Adiós, ${nombre}!`);
    }else{
        console.log(`Adios`);
    }
}

despedidaOpcional(); // Adios
despedidaOpcional("Fran"); // ¡Adiós Fran!




function variosParams(nombre: string, apellidos?:string, edad: number = 18) {
    if(apellidos) {
        console.log(`${nombre} ${apellidos} tiene ${edad} años`);
    }else { 
        console.log(`${nombre} tiene ${edad} años`);
    }
}

variosParams("Blanca"); // Blanca tiene 18 años
variosParams("Maria", "Sant"); // Maria Sant tiene 18 años
variosParams("Judit", undefined, 30); // Judit tiene 18 años
variosParams("Ester", "Quart", 32); // Ester Quart tiene 32 años

variosParams(nombre="Veronica", apellidos="Sanchez", /*edad=24*/); // Veronica sanchez tiene 24 años 


function ejemploVariosTipos(a: string | number ){

    if(typeof(a) === 'string') {
        console.log("A es un string");
    }else if(typeof(a) === 'number'){
        console.log("A es un number");
    }else{
        console.log("A no es un string ni tampoco un number");
        throw Error("A no es un string ni un number");
    }
}

ejemploVariosTipos("Hola"); // devuelve string
ejemploVariosTipos(3); // te devuelde un number
// ejemploVariosTipos(true) // Te da error porque esa opcion no es permitida



/**
 * 
 * @param nombre Nombre de la persona
 * @param apellidos Apellido de la persona
 * @returns Nombre completo de la persona
*/
function ejemploReturn(nombre: string, apellidos: string)/*: string | number*/{
    return `${nombre} ${apellidos}`;
    // return 3;
}


const nombreCompleto = ejemploReturn("Isabel", "Martin");
console.log(nombreCompleto); // Isabel Martin
console.log(ejemploReturn("Isabel", "Martin")); // Isabel Martin


/**
 * 
 * @param nombres es una lista de nombres de string 
*/

// Factores de propagación 
function ejemploMultipleParams(...nombres: string[]): void{
    nombres.forEach((nombre) => {
        console.log(nombre);
    })
}

ejemploMultipleParams("Lucas");
ejemploMultipleParams("Maria", "Marta", "Juan", "Belen");


const lista = ["Lucas", "Marga"];
ejemploMultipleParams(...lista);

function ejemploParamsLista(nombres: string[]){
    nombres.forEach((nombre) => {
        console.log(nombre);
    })
}

ejemploParamsLista(lista);


// Arrow Functions
// funcionaes anonimas se representan como  () =>{}

type Empleado = {
    nombre: string,
    apellidos: string,
    edad: number
}


let empleadoJCSivo: Empleado = {
    nombre: "Isabel",
    apellidos: "Marti",
    edad: 56
}

const mostrarEmpleado = (empleado:Empleado) => `${empleado.nombre} tiene ${empleado.edad} años`;

// Llamamos a la funcion flecha 
mostrarEmpleado(empleadoJCSivo);



const datosEmpleado = (empleado: Empleado): string => {

    if(empleado.edad > 70) {
        return `Empleado ${empleado.nombre} esta en edad de jubilación`;
    }else {
        return `Empleado ${empleado.nombre} esta en edad laboradl`;
    }
}

datosEmpleado(empleadoJCSivo); // Empleado JCSivo esta en edad laboral



const obtenerSalario = (empleado: Empleado, cobrar: () => string) => {
    
    if(empleado.edad > 70) {
        return ;
    }else {
        cobrar(); // CallBack a ejecutar
    }
};


/*const cobrarSalario = ( ) => {
    console.log("Cobrar nónima de empleado");
}*/

// obtenerSalario(empleadoJCSivo, cobrarSalario);

const cobrarEmpleado = (empleado: Empleado) => {
    console.log(`${empleado.nombre} cobra su salario`);
}

obtenerSalario(empleadoJCSivo, () => 'cobrar JCSivo');





// Async Functions

async function ejemploAsync(): Promise<string/*void*/> {
    // Await

    await console.log("Tarea completar antes de seguir con la secuencia de instrucciones");
    console.log("Tarea completada");
    return "Completado";
}

ejemploAsync().then((respuesta) => {
    console.log("Respuesta", respuesta);
}).catch((error) => {
    console.log("Ha habido un error", error);
}).finally(() => "Todo ha terminado")




// Generators

function ejemploGenerator() {
    // yield -> para emitir valores

    let index = 0;

    while(index < 5){
        // Emitimos un valor incrementado
        // yield index++;
        
    }
}


// Guardamos la funcion generadora en una variable 

let generadora = ejemploGenerator();

// Accedemos a kis valores emitidos

// console.log(generadora.next().value); // 0
// console.log(generadora.next().value); // 1
// console.log(generadora.next().value); // 2
// console.log(generadora.next().value); // 3


// worker 

function* watcher(valor: number){
    
    yield valor; // emitimos el valor inicial
    yield* worker(valor); // Llamamos a las emisiones del worker para que emita otros valores 
    yield valor + 4; // emitimos el valor final + 4
}


function* worker(valor: number) {
    yield valor + 1;
    yield valor + 2;
    yield valor + 3;
}


let generatorSaga = watcher(0);

console.log(generatorSaga.next().value); // 0 (lo ha echo watcher)
console.log(generatorSaga.next().value); // 1 (lo ha echo worker)
console.log(generatorSaga.next().value); // 2 (lo ha echo worker)
console.log(generatorSaga.next().value); // 3 (lo ha echo worker)
console.log(generatorSaga.next().value); // 4 (lo ha echo watcher)



// Sobrecarga de funciones

function mostrarError(error: string | number): void{
    console.log("Ha habido un error:", error);
}

/* Poco eficiente, mejor indicar la funcion que puede recibir 2 parametros
function mostrarError(errorNumber: number): void{
    console.log("Ha habido un error:", errorNumber);
}
*/



// Persistencia de datos
// 1. LocalStorage -> Almacena los datos en el navegador (no se eliminan automaticamente)
// 2. SessionStorage -> la diferencia radica en la sesión de navegador. Es decir, los datos se persisten en la sesión de navegador 
// 3. Cookies -> Tienen una fecha de caducidad y también tienen un ámbito de URL


// LocalStorage y SessionStorage

 function guardar(): void{
        localStorage.set("nombre", "Jcsivo");
        sessionStorage.set("nombre", "JCSivo");
 }

 function leer(): void{
    let nombre = localStorage.get("nombre");
    let nombreSession = sessionStorage.get("nombre");
 }

 function borrarItem(item: string){
    localStorage.removeItem(item);
    sessionStorage.removeItem(item);
 }

 function borrarTodas(): void {
    localStorage.clear();
    sessionStorage.clear();
 }


// Cookies

const cookieOptions = {
    name: "usuario", // string,
    value: "Belen", // string,
    maxAge: 10 * 60, // optional number (value in second),
    expires: new Date(2099, 10, 1), // optional Date,
    path: "/", // optional string,
    // domain: "site.com", // optional string,
    // secure: true, // optional boolean,
    // sameSite: "lax", // optional enum 'lax' | 'strict' | 'none'
}

// seteamos la Cookie
setCookie(cookieOptions);

// Leer una Cookie
let cookieLeida = getCookieValue("usuario");

// Eliminar
deleteCookie("usuario");

// Eliminar todas las Cookies
deleteAllCookies();


// Clase Temporizador

class Temporizador {

    public terminar?: (tiempo: number) => void;

    public empezar(): void {

        setTimeout(() => {
            // Comprobamos que exista la función terminar como callback
            if(!this.terminar) return;

            // Cuando haya pasado el tiempo, se ejecutará la función terminar
            this.terminar(Date.now());
        }, 10000)
    }
}


const miTemporizador: Temporizador = new Temporizador();

// Definimos la función del Callback a ejecutar cuando termine el tiempo

miTemporizador.terminar = (tiempo: number) => {
    console.log("Evento terminado en:", tiempo);
}

// Lanzamos el temporizador
miTemporizador.empezar(); // Se inicia el timeout y cuando termine, se ejecuta la función terminar()



setInterval(() => console.log("Tic"), 1000); // Imprime "tic" cada segundo por consola

// Eliminar la ejecución de la función 
delete miTemporizador.terminar;



// Acceso al documento
// document.getElementById("boton-login").addEventListener('click', () => {
//    console.log("Has hecho click en login");
// })


// ** CLASES

/*class Curso {

    nombre: string;
    horas: number;

    constructor(nombre: string, horas: number){
        this.nombre = nombre;
        this.horas = horas;
    }
}
*/


/*class Estudiante {

    // Propiedades de clase
    nombre: string;
    apellidos?: string;
    cursos: Curso[];


    // Constructor
    constructor(nombre: string, cursos: Curso[], apellidos?: string){
        // Inicializamos las propiedades
        this.nombre = nombre;
        // this.apellidos = apellidos?apellidos : undefined;
        if(apellidos){
            this.apellidos = apellidos;
        }
        this.cursos = cursos;
    }
}*/


// Creamos un curso

// const cursoTS: Curso = new Curso("TypeScript", 15);
// const cursoJS: Curso = new Curso("JavaScript", 20);

// const listaCursos: Curso[] = [];
// listaCursos.push(cursoTS, cursoJS); // [Lista de curso]


// Usamos el MOCK
const listaCursos: Curso[] = LISTA_CURSOS;


// Creamos un estudiante

const isabel: Estudiante = new Estudiante("Isabel", listaCursos, "Larriba");


console.log(`${isabel.nombre} estudia:`);
// Iteramos por cada uno de ellos
isabel.cursos.forEach((curso: Curso) => {
    console.log(`- ${curso.nombre} (${curso.horas} horas)`); // - TypeScript (15 horas)
})

const cursoAngular: Curso = new Curso("Angular", 40);

isabel.cursos.push(cursoAngular); // Añadimos


// Conocer las horas Estudiadas 

isabel.horasEstudiadas; // number

// isabel. -> No se puede acceder a la privada

// Creando los get y set ahora SI
isabel.ID_Estudiante;





// Saber la instacia de un objeto / variable 
// - typeof // sirve para saber el tipo de una variable 
// - instanceof // nos permite saber si es de una instancia de un tipo concreto 
// instanceof() -> para saber s se trata de un curso, estudiante...

let fechaNacimiento = new Date(1992, 10,10);

if(fechaNacimiento instanceof Date) {
    console.log("Es una instacia de Date")
}

if(isabel instanceof Estudiante){
    console.log("Isabel es una estudiante");
}


// Herencia y Polimorfismo

let trabajador1 = new Trabajador("Belen", "Larriba", 25, 1300);
let trabajador2 = new Trabajador("Blanca", "García", 20, 1700);
let trabajador3 = new Trabajador("Nuria", "raus", 34, 2400);


trabajador1.saludar(); // especificado en empleado

let jefe = new Jefe("Juan", "Santiago", 48);

jefe.trabajadores.push(trabajador1, trabajador2, trabajador3);

jefe.trabajadores.forEach((trabajador: Trabajador) => {
    // acceso a empleado
    trabajador.saludar();
    trabajador.saludar(); // Especificado en Trabajador 
});

jefe.saludar(); // Herencia de Persona




// Uso de Interfaces

let programar: ITarea = {
    titulo: "Programar en TypeScript",
    descripcion: "Practicar con Katas para aprender a desarrollar con TS",
    completada: false,
    urgencia: Nivel.Urgente,
    resumen: function (): string {
        return `${this.titulo} - ${this.completada} - Nivel: ${this.urgencia}`;
    }
}

console.log(programar.resumen());


// Tarea de Programación (implementa ITarea)

let programarTS = new Programar("TyoeScript", "Tarea de programación en TS", false, Nivel.Bloqueante);

console.log(programarTS.resumen());



// Decoradores experimentales --> se emplan usando el @
// - Clases
// - Parámetros
// - Métodos
// - Propiedades


/*@Component{
    // Configuraciones
}
class Botton{}
*/

function Override(label: string){
    return function (target: any, key: string){
        Object.defineProperty(target, key, {
            configurable: false,
            get: () => label
        })
    }
}

class PruebaDecorador {
    @Override('prueba') // Llamar a la función Override
    nombre: string = "JCSivo"
}


let prueba = new PruebaDecorador();

console.log(prueba.nombre); // "Prueba" siempre va a ser devuelto a través del get()


// Otra función para usarla como decorador 
function SoloLectura(target: any, key: string) {
    Object.defineProperty(target, key, {
        writable: false
    }) 
}

class PruebaSoloLectura {
    @SoloLectura
    nombre: string = '';
}

let pruebaLectura = new PruebaSoloLectura();
pruebaLectura.nombre = "JCSivo";

// console.log(pruebaLectura.nombre); // ==> Undefined, ya que no se le puede dar un valor (es solo de lectura)


// Decorador para parámetros de un métoo
function mostrarPosicion(target: any, propertyKey: string, parameterIndex: number) {
    console.log("Posición", parameterIndex);
}

class PruebaMetodoDecorador {
    prueba(a: string, @mostrarPosicion b: boolean){
        console.log(b);
    }
}

// Usamos el método con método con el parametro y su decorador 
/* let pruebaDecoradorEnParam = */ new PruebaMetodoDecorador().prueba('hola', false);



// Patrones CREACIONALES

// const s1 = Singleton.getInstace();
/*const s2 = Singleton.getInstace();

if(s1 === s2) {
    console.log('Singleton works, both variable contain the same instance');
}else {
    console.log('Singleton works, both variable contain the same instance');
}*/

const miPrimerSingleton = Singleton.getInstace();
const miSegundoSingleton = Singleton.getInstace();

// Comprueba si ambos son iguales 
if(miPrimerSingleton === miSegundoSingleton) {
    console.log('Singleton funciona correctamente, ambas variables tienen la misma instancia');
    miPrimerSingleton.mostrarPorConsola();
    miSegundoSingleton.mostrarPorConsola();
}else {
    console.log('Error, las variables contienen distintas instancias');
}











































































































// Sobrecarga de funciones 

// Funciones asíncronas

// Funciones generadoras