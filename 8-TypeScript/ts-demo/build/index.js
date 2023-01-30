"use strict";
// Esto es un comentario en TS
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __param = (this && this.__param) || function (paramIndex, decorator) {
    return function (target, key) { decorator(target, key, paramIndex); }
};
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
Object.defineProperty(exports, "__esModule", { value: true });
const cookies_utils_1 = require("cookies-utils");
const Curso_1 = require("./models/Curso");
const Estudiante_1 = require("./models/Estudiante");
const cursos_mock_1 = require("./mock/cursos.mock");
const Persona_1 = require("./models/Persona");
const ITarea_1 = require("./models/interfaces/ITarea");
const Programar_1 = require("./models/Programar");
/**
 * Esto es un comentario
 * Multilínea
 */
console.log("Hola TypeScript");
console.log("Hola JCSivo");
// Declaración de Variables:
var nombre = "JCSivo";
var nombre1 = 'Isabel';
var nombre2 = "Juan";
console.log("Hola, " + nombre);
console.log("¿Que tal?", nombre1, "?");
console.log(`¿Como han ido las vacaciones, ${nombre} ?`);
let email = "jcsivo@email.com"; // Variable de ámbito local
console.log(`El Email de ${nombre} es ${email}`);
const PI = 3.1416;
const Pi = 3.1312;
// PI = PI + 1 ; Estas variables no son modificables 
var apellidos = "sanchez lopex"; // Tipo any hace que la variable pueda cambiar de tipo
apellidos = 3;
var error;
error = false;
console.log(`¿Hay error?: ${error}`);
// Instanciación múltiple de variables
let a, b, c; // instacia 3 variables sin valor inicial
a = "TypeScript";
b = true;
c = 9.8;
// c:string = "" -> No se puede llevar a cabo
// BuiltIn Types: number, string, boolean, void, null y undefined 
// Tipos más complejos
// Listas de cadenas de texto
let listatareas = ["Tarea1", "Tarea2", "Tarea3"];
// Combinación de tipos en listas
let valores = [false, "Hola", true, 56];
// Enumerados
var Estados;
(function (Estados) {
    Estados["Completado"] = "C";
    Estados["Incompleto"] = "I";
    Estados["Pendiente"] = "P";
})(Estados || (Estados = {}));
var PuestoCarrera;
(function (PuestoCarrera) {
    PuestoCarrera[PuestoCarrera["Primero"] = 1] = "Primero";
    PuestoCarrera[PuestoCarrera["Segundo"] = 2] = "Segundo";
    PuestoCarrera[PuestoCarrera["Tercero"] = 3] = "Tercero";
})(PuestoCarrera || (PuestoCarrera = {}));
let estadoTareas = Estados.Completado;
let puestoMaraton = PuestoCarrera.Segundo;
// podemos crear variables que sigan la interface Tarea
let tarea1 = {
    nombre: "Tarea 1",
    estado: Estados.Pendiente,
    urgencia: 10
};
console.log(`Tarea: ${tarea1.nombre}`);
// Asignación múltiple de variables 
let miTarea = {
    titulo: 'Mi tarea',
    estado: Estados.Completado,
    urgencia: 1
};
// Declaración 1 a 1 
let miTitulo = miTarea.titulo;
let miEstado = miTarea.estado;
let miUrgencia = miTarea.urgencia;
// ** Factor Spread (Propagación)
// En asignación de variables  
let { titulo, estado, urgencia } = miTarea;
// En listas
let listaCompraLunes = ["Huevos", "Patatas"];
let listaCompraMartes = [...listaCompraLunes, "Pan", "Leche"];
let listaCompraMiercoles = ["Carne", "Pescado"];
let listaCompraSemana = [...listaCompraLunes, ...listaCompraMiercoles];
// En objetos
let estadoApp = {
    usuario: "admin",
    session: 3,
    jwt: "Bearer12836112783"
};
// Cambiar un valor por progagación 
let nuevoEstado = Object.assign(Object.assign({}, estadoApp), { session: 4 });
let coche = {
    nombre: "Audi",
    precio: 36000,
    anio: 2021
};
// ** Condicionales
// Operadores ternarios
console.log(coche.anio < 2010 ? `Coche: ${coche.nombre} es viejo` : `Coche: ${coche.nombre} es nuevo`);
// If - else
if (error) {
    console.log("Hay un error");
}
else {
    console.log("No hay error");
}
// IF - else if - else
if (coche.anio < 2010) {
    console.log(`Coche: ${coche.nombre} es viejo`);
}
else if (coche.anio === 2010) {
    console.log(`Coche: ${coche.nombre} es del 2010`);
}
else {
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
let listaTareasNueva = [
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
];
// For Clásico
for (let index = 0; index < listaTareasNueva.length; index++) {
    const tarea = listaTareasNueva[index];
    console.log(`${index} - ${tarea.nombre}`);
}
// Foreach 
listaTareasNueva.forEach((tarea, index) => {
    console.log(`${index} - ${tarea.nombre}`);
});
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
    }
    else {
        tarea1.urgencia++;
    }
}
// DO While (Se ejecuta al menos una vez)
do {
    tarea1.urgencia++;
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
}
;
// Invocación de la función 
saludar();
/**
 * Funcioón que muestra un saludo por consola a una persona
 * @param nombre Nombre de la persona a saludar
 */
function saludarPersona(nombre) {
    console.log(`¡Hola, ${nombre}!`);
}
;
saludarPersona("JCSivo");
// saludarPersona(2);  -> No te lo permite hacer por el tipado string si lo haces any si que lo permite
// const persona = "JCSivo";
// saludarPersona(persona);
/**
 * Funcioón que muestra un adios por consola a una persona
 * @param nombre Nombre de la persona a depedir, por defecto sera Isabel
 */
function despedirPersona(nombre = "Isabel") {
    console.log(`Adios, ${nombre}`);
}
despedirPersona(); // Adios Isabel
despedirPersona("Alba"); // Adios Alba
/**
 * Funcioón que muestra un adios por consola a una persona
 * @param nombre (Opcional) Nombre de la persona a depedir
 */
function despedidaOpcional(nombre) {
    if (nombre) {
        console.log(`Adiós, ${nombre}!`);
    }
    else {
        console.log(`Adios`);
    }
}
despedidaOpcional(); // Adios
despedidaOpcional("Fran"); // ¡Adiós Fran!
function variosParams(nombre, apellidos, edad = 18) {
    if (apellidos) {
        console.log(`${nombre} ${apellidos} tiene ${edad} años`);
    }
    else {
        console.log(`${nombre} tiene ${edad} años`);
    }
}
variosParams("Blanca"); // Blanca tiene 18 años
variosParams("Maria", "Sant"); // Maria Sant tiene 18 años
variosParams("Judit", undefined, 30); // Judit tiene 18 años
variosParams("Ester", "Quart", 32); // Ester Quart tiene 32 años
variosParams(nombre = "Veronica", apellidos = "Sanchez"); // Veronica sanchez tiene 24 años 
function ejemploVariosTipos(a) {
    if (typeof (a) === 'string') {
        console.log("A es un string");
    }
    else if (typeof (a) === 'number') {
        console.log("A es un number");
    }
    else {
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
function ejemploReturn(nombre, apellidos) {
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
function ejemploMultipleParams(...nombres) {
    nombres.forEach((nombre) => {
        console.log(nombre);
    });
}
ejemploMultipleParams("Lucas");
ejemploMultipleParams("Maria", "Marta", "Juan", "Belen");
const lista = ["Lucas", "Marga"];
ejemploMultipleParams(...lista);
function ejemploParamsLista(nombres) {
    nombres.forEach((nombre) => {
        console.log(nombre);
    });
}
ejemploParamsLista(lista);
let empleadoJCSivo = {
    nombre: "Isabel",
    apellidos: "Marti",
    edad: 56
};
const mostrarEmpleado = (empleado) => `${empleado.nombre} tiene ${empleado.edad} años`;
// Llamamos a la funcion flecha 
mostrarEmpleado(empleadoJCSivo);
const datosEmpleado = (empleado) => {
    if (empleado.edad > 70) {
        return `Empleado ${empleado.nombre} esta en edad de jubilación`;
    }
    else {
        return `Empleado ${empleado.nombre} esta en edad laboradl`;
    }
};
datosEmpleado(empleadoJCSivo); // Empleado JCSivo esta en edad laboral
const obtenerSalario = (empleado, cobrar) => {
    if (empleado.edad > 70) {
        return;
    }
    else {
        cobrar(); // CallBack a ejecutar
    }
};
/*const cobrarSalario = ( ) => {
    console.log("Cobrar nónima de empleado");
}*/
// obtenerSalario(empleadoJCSivo, cobrarSalario);
const cobrarEmpleado = (empleado) => {
    console.log(`${empleado.nombre} cobra su salario`);
};
obtenerSalario(empleadoJCSivo, () => 'cobrar JCSivo');
// Async Functions
function ejemploAsync() {
    return __awaiter(this, void 0, void 0, function* () {
        // Await
        yield console.log("Tarea completar antes de seguir con la secuencia de instrucciones");
        console.log("Tarea completada");
        return "Completado";
    });
}
ejemploAsync().then((respuesta) => {
    console.log("Respuesta", respuesta);
}).catch((error) => {
    console.log("Ha habido un error", error);
}).finally(() => "Todo ha terminado");
// Generators
function ejemploGenerator() {
    // yield -> para emitir valores
    let index = 0;
    while (index < 5) {
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
function* watcher(valor) {
    yield valor; // emitimos el valor inicial
    yield* worker(valor); // Llamamos a las emisiones del worker para que emita otros valores 
    yield valor + 4; // emitimos el valor final + 4
}
function* worker(valor) {
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
function mostrarError(error) {
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
function guardar() {
    localStorage.set("nombre", "Jcsivo");
    sessionStorage.set("nombre", "JCSivo");
}
function leer() {
    let nombre = localStorage.get("nombre");
    let nombreSession = sessionStorage.get("nombre");
}
function borrarItem(item) {
    localStorage.removeItem(item);
    sessionStorage.removeItem(item);
}
function borrarTodas() {
    localStorage.clear();
    sessionStorage.clear();
}
// Cookies
const cookieOptions = {
    name: "usuario",
    value: "Belen",
    maxAge: 10 * 60,
    expires: new Date(2099, 10, 1),
    path: "/", // optional string,
    // domain: "site.com", // optional string,
    // secure: true, // optional boolean,
    // sameSite: "lax", // optional enum 'lax' | 'strict' | 'none'
};
// seteamos la Cookie
(0, cookies_utils_1.setCookie)(cookieOptions);
// Leer una Cookie
let cookieLeida = (0, cookies_utils_1.getCookieValue)("usuario");
// Eliminar
(0, cookies_utils_1.deleteCookie)("usuario");
// Eliminar todas las Cookies
(0, cookies_utils_1.deleteAllCookies)();
// Clase Temporizador
class Temporizador {
    empezar() {
        setTimeout(() => {
            // Comprobamos que exista la función terminar como callback
            if (!this.terminar)
                return;
            // Cuando haya pasado el tiempo, se ejecutará la función terminar
            this.terminar(Date.now());
        }, 10000);
    }
}
const miTemporizador = new Temporizador();
// Definimos la función del Callback a ejecutar cuando termine el tiempo
miTemporizador.terminar = (tiempo) => {
    console.log("Evento terminado en:", tiempo);
};
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
const listaCursos = cursos_mock_1.LISTA_CURSOS;
// Creamos un estudiante
const isabel = new Estudiante_1.Estudiante("Isabel", listaCursos, "Larriba");
console.log(`${isabel.nombre} estudia:`);
// Iteramos por cada uno de ellos
isabel.cursos.forEach((curso) => {
    console.log(`- ${curso.nombre} (${curso.horas} horas)`); // - TypeScript (15 horas)
});
const cursoAngular = new Curso_1.Curso("Angular", 40);
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
let fechaNacimiento = new Date(1992, 10, 10);
if (fechaNacimiento instanceof Date) {
    console.log("Es una instacia de Date");
}
if (isabel instanceof Estudiante_1.Estudiante) {
    console.log("Isabel es una estudiante");
}
// Herencia y Polimorfismo
let trabajador1 = new Persona_1.Trabajador("Belen", "Larriba", 25, 1300);
let trabajador2 = new Persona_1.Trabajador("Blanca", "García", 20, 1700);
let trabajador3 = new Persona_1.Trabajador("Nuria", "raus", 34, 2400);
trabajador1.saludar(); // especificado en empleado
let jefe = new Persona_1.Jefe("Juan", "Santiago", 48);
jefe.trabajadores.push(trabajador1, trabajador2, trabajador3);
jefe.trabajadores.forEach((trabajador) => {
    // acceso a empleado
    trabajador.saludar();
    trabajador.saludar(); // Especificado en Trabajador 
});
jefe.saludar(); // Herencia de Persona
// Uso de Interfaces
let programar = {
    titulo: "Programar en TypeScript",
    descripcion: "Practicar con Katas para aprender a desarrollar con TS",
    completada: false,
    urgencia: ITarea_1.Nivel.Urgente,
    resumen: function () {
        return `${this.titulo} - ${this.completada} - Nivel: ${this.urgencia}`;
    }
};
console.log(programar.resumen());
// Tarea de Programación (implementa ITarea)
let programarTS = new Programar_1.Programar("TyoeScript", "Tarea de programación en TS", false, ITarea_1.Nivel.Bloqueante);
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
function Override(label) {
    return function (target, key) {
        Object.defineProperty(target, key, {
            configurable: false,
            get: () => label
        });
    };
}
class PruebaDecorador {
    constructor() {
        this.nombre = "JCSivo";
    }
}
__decorate([
    Override('prueba') // Llamar a la función Override
    ,
    __metadata("design:type", String)
], PruebaDecorador.prototype, "nombre", void 0);
let prueba = new PruebaDecorador();
console.log(prueba.nombre); // "Prueba" siempre va a ser devuelto a través del get()
// Otra función para usarla como decorador 
function SoloLectura(target, key) {
    Object.defineProperty(target, key, {
        writable: false
    });
}
class PruebaSoloLectura {
    constructor() {
        this.nombre = '';
    }
}
__decorate([
    SoloLectura,
    __metadata("design:type", String)
], PruebaSoloLectura.prototype, "nombre", void 0);
let pruebaLectura = new PruebaSoloLectura();
pruebaLectura.nombre = "JCSivo";
// console.log(pruebaLectura.nombre); // ==> Undefined, ya que no se le puede dar un valor (es solo de lectura)
// Decorador para parámetros de un métoo
function mostrarPosicion(target, propertyKey, parameterIndex) {
    console.log("Posición", parameterIndex);
}
class PruebaMetodoDecorador {
    prueba(a, b) {
        console.log(b);
    }
}
__decorate([
    __param(1, mostrarPosicion),
    __metadata("design:type", Function),
    __metadata("design:paramtypes", [String, Boolean]),
    __metadata("design:returntype", void 0)
], PruebaMetodoDecorador.prototype, "prueba", null);
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
if (miPrimerSingleton === miSegundoSingleton) {
    console.log('Singleton funciona correctamente, ambas variables tienen la misma instancia');
    miPrimerSingleton.mostrarPorConsola();
    miSegundoSingleton.mostrarPorConsola();
}
else {
    console.log('Error, las variables contienen distintas instancias');
}
// Sobrecarga de funciones 
// Funciones asíncronas
// Funciones generadoras
//# sourceMappingURL=index.js.map