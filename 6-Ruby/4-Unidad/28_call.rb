# & -> guardar en una variable el bloque entero 
# book.call es equivalente al hacer yield
def print_all &book
    print_greetins
    # print_book(&book)
    # yield &book
    book.call if block_given?
    yield("Hola mundo")
end

def print_greetins
    puts "Hola, usuario"
    puts "Te recomiendo el siguiente libro"
end

# def print_book
# end

print_all do |title|
    puts "Título: Hola mundo #{title}"
    puts "Autor: Blanca"
end