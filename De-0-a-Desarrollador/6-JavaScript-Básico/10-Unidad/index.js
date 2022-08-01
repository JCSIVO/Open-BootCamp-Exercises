import {suma, multiplicar} from "./controller.js"
import chalk from 'chalk';


let sum = suma(1,2)
let sum1 = suma(4,5)
console.log(sum)
console.log(sum1)


let multi = multiplicar(1,2)
let multi1 = multiplicar(4,5)
console.log(multi)
console.log(multi1)


//version V.2
console.log(multiplicar(suma(1,2), suma(4,5)))

console.log(chalk.green(multiplicar(suma(1,2), suma(4,5))))