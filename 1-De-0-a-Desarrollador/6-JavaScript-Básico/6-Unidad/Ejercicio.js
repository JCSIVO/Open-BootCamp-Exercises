let listaCompra = ["Harina", "leche", "huevos", "sal","tomate"]
listaCompra.push("aceite de girasol")
console.log(listaCompra)
listaCompra.pop()
console.log(listaCompra)

let peliculasFavoritas = [
    {titulo:"A todo gas", Director:"Vin diesel", fecha:"2009"},
    {titulo:"Infinity Wars", Director: "Marvel", fecha:"2021"},
    {titulo:"El señor de los anillos", Director:"J.K.ROWLING", fecha:"2018"}
]
let peliculaPosterior = peliculasFavoritas.filter(obj =>obj.fecha >2010)
console.log(peliculaPosterior)

let directoresPelis = peliculasFavoritas.map(peli => {return peli.Director})
console.log(directoresPelis)

let tituloPelis = peliculasFavoritas.map(peli => {return peli.titulo})
console.log(tituloPelis)


let fusion = directoresPelis.concat(tituloPelis)
console.log(fusion)

let propagacion = [...directoresPelis, ...tituloPelis]
console.log(propagacion)