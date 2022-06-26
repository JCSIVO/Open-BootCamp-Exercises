#Funcion que diga si un numnero es primo o no

def numeroPrimo():
    numero = int(input('¿Por favor introduce un numero? '))
    if numero > 1:
        for valor in range(2,int(numero)):
            if(int(numero) % valor) == 0:
                print(f'El numero {numero} No es primo ya que se puede dividir entre {valor}')
                break #El break rompe el if para que no itere con el rango
            else:
                print(f'Felicidades tu {numero} si que es primo')
    else:
        print('Disculpa pero los numeros primos deben de ser mayores que 1')

print(numeroPrimo())
