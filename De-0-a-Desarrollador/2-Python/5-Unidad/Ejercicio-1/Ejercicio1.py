import math

#Calcular el area del triangulo
altura = int (input('¿Por favor introduce la altura del triangulo:? '))
base = int (input('¿Por favor introduce la base del triangulo:? '))

def areaTriangulo(altura, base):
    resultado = (altura * base ) / 2
    print(resultado)

areaTriangulo(altura, base)

#Calcular el area del circulo
radio = int(input('¿Por favor introduce el radio del circulo? '))

def areaCirculo(radio):
    resultado = math.pi * (radio ** 2)
    print(resultado)

areaCirculo(radio)