let nombre = "Jose"
let apellido = "Conejero"

let datos = {
    nombre, 
    apellido
}

//localStorage.setItem("datos", JSON.stringify(datos))
//sessionStorage.setItem("datos", JSON.stringify(datos))

let cook = new Date()
Document.cookie = `datos = ${JSON.stringify(datos)}; 
expires = ${new Date(cook.getTime()+ 2 * 60000)}`