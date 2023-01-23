# self. = @

class Book
    def initialize (title, ed, pags) 
        # puts "Iniciando..."
        @title = title
        @editorial = ed
        @pags = pags
    end

    def title
        @title
    end

    def title=(title)
        @title = title
    end

    def editorial
        @editorial
    end

    def editorial=(editorial)
        @editorial = editorial
    end

    def pags
        @pags
    end

    def pags=(pags)
        @pags = pags
    end

end




# game_of_thrones = Book.new("Game of Thornes", "Anaya", 950)

book1 = Book.new("Game of thornes", "Anaya", 950 )
book2 = Book.new("Fundation", "Sant", 350 )


puts book1.title
puts book2.title
puts book1.pags