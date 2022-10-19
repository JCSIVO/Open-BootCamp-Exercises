from mailbox import NoSuchMailboxError


class Alumno:
    #inicializar los datos
    def datos(self, nombre, nota):
        self.nombre = nombre
        self.nota = nota


    # Imprimir los datos
    def imprimir(self):
        print('Nombre:', self.nombre)
        print('Nota', self.nota)


    #Obtener los datos

    def resultado(self):
        if self.nota < 5:
            print('Estas suspendido')
        else:
            print('Has Aprobado')

alumno1 = Alumno()
alumno2 = Alumno()

alumno1.datos('Juan', 9)
alumno2.datos('Blanca', 3)

alumno1.imprimir()
alumno1.resultado()
alumno2.imprimir()
alumno2.resultado()