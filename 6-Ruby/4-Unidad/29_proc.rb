def print_all(book, book2, book3)
    puts "Hola, usuario"
    puts "Te recomiendo el siguiente libro"
    book.call 
    puts "También te recomiendo"
    book2.call
    puts "Y por último, no olvides leer: "
    book3.call 
end


book = Proc.new do
    puts "Título: Hola mundo"
    puts "Autor: Blanca"
end

book2 = Proc.new do
    puts "Título: Libro 2"
    puts "Autor: Lucas"
end

book3 = Proc.new do
    puts "Título: Libro 3"
    puts "Autor: Belen"
end

print_all(book, book2, book3)
# store_book(book)