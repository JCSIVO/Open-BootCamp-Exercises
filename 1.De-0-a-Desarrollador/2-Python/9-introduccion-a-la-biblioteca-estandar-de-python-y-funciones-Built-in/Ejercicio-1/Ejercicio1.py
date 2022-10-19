resul = input('¿Por favor introduce los paises separados por comas:? \n')

paises = [ pais for pais in resul.split(',')]

print(','.join(sorted(list(set(paises)))))