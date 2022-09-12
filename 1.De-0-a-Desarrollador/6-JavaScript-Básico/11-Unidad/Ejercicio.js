class Estudiante {
    nombre = "Jose";
    asignatura = ["JavaScript", "HTML", "CSS"];

    obtenDatos(){
        return {
            nombre: this.nombre, 
            asignatura: this.asignatura
        }
    }
}

let estudiante = new Estudiante();
console.log(estudiante.obtenDatos())