let fecha = new Date()
console.log(fecha)

let fechaNaci = new Date(1992, 00,07)
console.log(fechaNaci)

let fechaTarde = fecha.getTime() > fechaNaci.getTime();
console.log(fechaTarde)

let mesNaci = fechaNaci.getMonth() + 1; //Se le suma +1 porque enero empieza en el 00
console.log(mesNaci)

let yearNaci = fechaNaci.getFullYear()
console.log(yearNaci)