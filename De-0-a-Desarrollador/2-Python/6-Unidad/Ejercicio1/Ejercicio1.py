class Vehiculo():
    def __init__(self, color, ruedas, puertas):
        self.color = color
        self.ruedas = ruedas
        self.puertas = puertas

        #Para que no nos muestra la direccion de memoria y su los datos
    def __str__(self):
        return "color {} , {} ruedas, {} puertas ".format(self.color, self.ruedas, self.puertas)


class Coche(Vehiculo):
    def __init__(self, color, ruedas, puertas, velocidad, cilindrada):
        super().__init__(color, ruedas, puertas,)
        self.velocidad = velocidad
        self.cilindrada = cilindrada

    #Con los def str le indicamos que nos muestre los valores y no la direccion de memoria
    def __str__(self):
        return Vehiculo.__str__(self) + '{} km/h , {} cc' .format(self.cilindrada, self.velocidad)


audi = Coche('blanco',4,5,120,1800)
print(audi)
ferrari = Coche('Ámarillo',3,5,190,1700)
print(ferrari)

