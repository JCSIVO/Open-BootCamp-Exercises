/**
 * La función suma devuelve la suma de a + b
 * 
 * @param {number} a - El primer numero a sumar 
 * @param {number} b - El segundo numero a sumar
 * @returns {number} - Devuelve la suma de a + b
 */
const suma = (a, b = 5) => a + b


/**
 * Funcion para añadir un item nuevo al final de unn array
 * 
 * @param {object[]} array - El array inicial 
 * @param {object} item  - El nuevo item que queremos introducir en el array inicial
 * @returns {object[]} - Devuelve un array de objetos 
 */

const pushArray = (array, item) => [...array, item]