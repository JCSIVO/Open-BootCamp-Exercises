# self. = @

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
end




# game_of_thrones = Book.new("Game of Thornes", "Anaya", 950)

book1 = Book.new("Game of thornes", "Anaya", 950 )
book2 = Book.new("Fundation", "Sant", 350 )


puts book1.title
puts book2.title
puts book1.pags