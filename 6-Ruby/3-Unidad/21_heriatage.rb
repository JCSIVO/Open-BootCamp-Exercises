class Media
    def initialize(title, distributor)
        @title = title
        @distributor = distributor
    end

    attr_accessor :title, :distributor

    def print_full_info
        puts "Titulo: #{@title}"
    end
end

class Book < Media
    def initialize (title, distributor, ed, pags) 
        super(title, distributor)
        @editorial = ed
        @pags = pags
    end
    attr_accessor :editorial, :pags

    def print_full_info
        puts "Título: #{@title} Editorial: #{@editorial} Número de páginas: #{@pags} "
    end
end

class Movie < Media
    def initialize(title, distributor, director, duration)
        super(title, distributor)
        @director = director
        @duration = duration
    end
    attr_accessor :director, :duration

    def print_full_info
        puts "Título: #{@title} Director: #{@director} Duración en minutos: #{@duration} "
    end
end