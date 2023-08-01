let yo = {
    nombre: "Jose",
    apellido: "Conejero",
    edad: "30",
    alutra: "172",
    isDeveloper: true
} 

let miEdad = yo.edad
console.log(miEdad)

let lista = [
    {
        ...yo
    },
    {
        nombre: "Daniel",
        apellido: "Olivera",
        edad: "36",
        alutra: "177",
        isDeveloper: false
    },
    {
        nombre: "Juan",
        apellido: "Larriba",
        edad: "28",
        alutra: "174",
        isDeveloper: true
    }
]

let listaOrdenada = lista.sort((a , b) => b.edad - a.edad)
console.log(listaOrdenada)