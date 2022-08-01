function verdad(){
    return true
}

async function promesa(){
    setTimeout(() => console.log("Soy una promesa"), 5000)
}
promesa()


function* idPares(){
    let id = 0;
    while(true){
        yield id += 2
    }
}

let pares = idPares()

console.log(pares.next())