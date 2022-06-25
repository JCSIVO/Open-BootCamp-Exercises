Last login: Sat Jun 25 15:05:34 on ttys000

The default interactive shell is now zsh.
To update your account to use zsh, please run `chsh -s /bin/zsh`.
For more details, please visit https://support.apple.com/kb/HT208050.
MBP-de-Jose:~ joseconejerosivo$ python3
Python 3.8.9 (default, Apr 13 2022, 08:48:07) 
[Clang 13.1.6 (clang-1316.0.21.2.5)] on darwin
Type "help", "copyright", "credits" or "license" for more information.
>>> Saludo = 'Buenos días'
>>> peso = input('¿Por favor introduce tu peso en Kg?')
¿Por favor introduce tu peso en Kg? 76
>>> estatura = input('¿Introduce tu estatura en metros?')
¿Introduce tu estatura en metros?1.79
>>> imc = round(float(peso)/float(estatura)**2,2)
>>> print("Tu indice de masa corporal es:" + imc)
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
TypeError: can only concatenate str (not "float") to str
>>> print("Tu indice de masa corporal es:" + str(imc))
Tu indice de masa corporal es:23.72
>>> 


