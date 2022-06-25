Last login: Sat Jun 25 13:21:34 on ttys001

The default interactive shell is now zsh.
To update your account to use zsh, please run `chsh -s /bin/zsh`.
For more details, please visit https://support.apple.com/kb/HT208050.
MBP-de-Jose:~ joseconejerosivo$ python3
Python 3.8.9 (default, Apr 13 2022, 08:48:07) 
[Clang 13.1.6 (clang-1316.0.21.2.5)] on darwin
Type "help", "copyright", "credits" or "license" for more information.
>>> Nombre = "Blanca"
>>> Apellidos = "Perez"
>>> Edad = 25
>>> Email = blanca@gmail.com
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
NameError: name 'blanca' is not defined
>>> Email = "blanca@gmail.com"
>>> Telefono = 678543154
>>> Casado = True
>>> Con_Hijos = False
>>> lista_amigos = ['Maria', 'Juan', 'Pedro']
>>> peliculas_vistas = {
... "clave": "Piratas del Caribe",
... "clave2": "Harry Potter",
... "clave3": "Fast and Furious"
... }
>>> print(nombre)
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
NameError: name 'nombre' is not defined
>>> print(Nombre)
Blanca
>>> print(Apellidos)
Perez
>>> print(Edad)
25
>>> print(>>> print(Email)
blanca@gmail.com
>>> print(Telefono)
678543154
>>> print(Casdo)
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
NameError: name 'Casdo' is not defined
>>> print(Casado)
True
>>> print(Con_Hijos)
False
>>> print(lista_amigos)
['Maria', 'Juan', 'Pedro']
>>> print(peliculas_vistas)
{'clave': 'Piratas del Caribe', 'clave2': 'Harry Potter', 'clave3': 'Fast and Furious'}
>>> 
