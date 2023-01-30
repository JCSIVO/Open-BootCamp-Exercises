import { Curso } from "./Curso";

export class Estudiante {

    // Propiedades de clase
    nombre: string;
    apellidos?: string;
    cursos: Curso[];
    // Esta propiedad no es accesible desde fuera 
    private ID: string = '1234';


    // Constructor
    constructor(nombre: string, cursos: Curso[], apellidos?: string){
        // Inicializamos las propiedades
        this.nombre = nombre;
        // this.apellidos = apellidos?apellidos : undefined;
        if(apellidos){
            this.apellidos = apellidos;
        }
        this.cursos = cursos;
    }

    // obtener datos controlados
    get horasEstudiadas (): number{

        let horasEstudiadas = 0;

        this.cursos.forEach((curso: Curso) => {
            horasEstudiadas += curso.horas;
        })

        return horasEstudiadas;
    }

    // Si se puede acceder con get o set porque estas dentro del ambito de clase
    get ID_Estudiante (): string{

        return this.ID;
    }

    set ID_Estudiante (id: string){
        this.ID;
    }

}