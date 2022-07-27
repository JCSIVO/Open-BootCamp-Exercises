let nombre = "Jose";
let apellido = "Conejero";
let estudiante = nombre.concat(" ",apellido);
console.log(estudiante)
let estudianteMayus = estudiante.toUpperCase();
let estudianteMinus = estudiante.toLowerCase();
console.log(estudianteMayus)
console.log(estudianteMinus)
let num = estudiante.length;
console.log(num)
let pos = nombre[0]
console.log(pos)
let posult = apellido[apellido.length -1]
console.log(posult)
let elimiespa = estudiante.replace(" ","")
console.log(elimiespa)
let bol = estudiante.includes("pepe")
console.log(bol)
let bol2 = estudiante.includes("Jose")
console.log(bol2)