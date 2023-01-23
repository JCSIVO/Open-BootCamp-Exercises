class Book
    # Es para la definición de los getter y setter
    # attr_reader # getter
    # attr_writer # setter
    # attr_accessor # definicion de los dos get y set 
    
    def initialize (title, ed, pags) 
        # puts "Iniciando..."
        @title = title
        @editorial = ed
        @pags = pags
    end
    attr_accessor :title, :editorial, :pags

    def print_full_info
        puts "Título: #{@title} Editorial: #{@editorial} Número de páginas: #{@pags} "
    end
end


book1 = Book.new("Ejemplo", "Mi editorial", 350)

book1.print_full_info