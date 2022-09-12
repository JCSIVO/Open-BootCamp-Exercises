import sqlite3

conn = sqlite3.connect('bdalumnos.db')

cursor = conn.cursor()

rows = cursor.execute("SELECT * FROM alumnos WHERE Nombre='Juan'")
fila = cursor.fetchall()
print(fila)
cursor.close()
conn.close()