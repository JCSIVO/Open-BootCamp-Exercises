#Calcular si un año es bisiesto o no

def anyoBisiesto():
    anyo = int(input('¿Introduce los numero del año?: '))
    if(anyo % 4 == 0 and (anyo % 100 != 0 or anyo % 400 == 0)):
        print('Es un año bisiesto')
    else:
        print('NO es año bisiesto')
print(anyoBisiesto())