let parrafos = document.querySelectorAll(".parrafo")
let secciones = document.querySelectorAll(".seccion")
//console.log(parrafos)

parrafos.forEach(parrafo => {
    parrafo.addEventListener("dragstart", event => {
        console.log("Estoy arrastrando el parrafo: " + parrafo.innerText)
        parrafo.classList.add("dragging")
        event.dataTransfer.setData("id", parrafo.id)
        let elemento_fantasma = document.querySelector(".imagen-fantasma") 
        event.dataTransfer.setDragImage(elemento_fantasma, 0, 0)

    })
    parrafo.addEventListener("dragend", () => {
        //console.log("He terminado de arrastrar")
        parrafo.classList.remove("dragging")
    })
})

secciones.forEach(seccion => {
    seccion.addEventListener("dragover", event => {
        event.preventDefault()
        event.dataTransfer.dropEffect = "copy" //copy por defecto
        //console.log("Drag Over")
        //
    })

    seccion.addEventListener("drop", event => {
        console.log("Drop")
        let id_parrafo = event.dataTransfer.getData("id")
        //console.log("Parrafo id: ", id_parrafo)
        let parrafo = document.getElementById(id_parrafo)
        seccion.appendChild(parrafo)
    })

    let papelera = document.querySelector(".papelera")

    papelera.addEventListener("dragover", event => {
        event.preventDefault()
        event.dataTransfer.dropEffect = "copy"
    })

    papelera.addEventListener("drop", event => {
        let id_parrafo = event.dataTransfer.getData("id")
        document.getElementById(id_parrafo).remove()
    })
})