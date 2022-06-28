f = open('mifichero.txt', 'w')
f.write('Esta es la primera vez que creo un archivo \n')
f.close()

f = open('mifichero.txt', 'r+')
f.readline()
f.write('Es la segunda que edito este archivo \n')

