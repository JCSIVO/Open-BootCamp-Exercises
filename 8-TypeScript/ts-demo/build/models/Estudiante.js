"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.Estudiante = void 0;
class Estudiante {
    // Constructor
    constructor(nombre, cursos, apellidos) {
        // Esta propiedad no es accesible desde fuera 
        this.ID = '1234';
        // Inicializamos las propiedades
        this.nombre = nombre;
        // this.apellidos = apellidos?apellidos : undefined;
        if (apellidos) {
            this.apellidos = apellidos;
        }
        this.cursos = cursos;
    }
    // obtener datos controlados
    get horasEstudiadas() {
        let horasEstudiadas = 0;
        this.cursos.forEach((curso) => {
            horasEstudiadas += curso.horas;
        });
        return horasEstudiadas;
    }
    // Si se puede acceder con get o set porque estas dentro del ambito de clase
    get ID_Estudiante() {
        return this.ID;
    }
    set ID_Estudiante(id) {
        this.ID;
    }
}
exports.Estudiante = Estudiante;
//# sourceMappingURL=Estudiante.js.map