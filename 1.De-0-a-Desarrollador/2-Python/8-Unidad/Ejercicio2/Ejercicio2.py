from pickle import *

class Vehiculo:

    def __init__(self, nombre, precio):
        self.nombre = nombre
        self.precio = precio
    
    def __str__(self):
        return self.nombre + '' + self.precio


seat = Vehiculo('Seat ', '20.000')
print(seat)
f = open('ficheroClaseVehiculo.txt', 'wb')
dump(seat,f)
f.close()