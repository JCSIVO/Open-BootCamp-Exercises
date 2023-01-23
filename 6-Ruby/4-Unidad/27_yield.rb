def print_all
    # sentencias 
    puts "Hola, usuario"
    puts "Te recomiendo el siguiente libro"
    yield if block_given? # Ejecutar el bloque si se ha recibido el bloque
end

print_all do
    puts "Título: Hola mundo"
    puts "Autor: Blanca"
end