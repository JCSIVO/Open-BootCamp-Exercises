# sentencia1
# sentencia2
# sentencia3
# ...
#sentencia N

# si se cumple la condicion X
    # sentencias si se cumple la condicion X 1
    # sentencias si se cumple la condicion X 2
    # sentencias si se cumple la condicion X 3

    puts "Introduce tu edad: "
    age = gets 

    # if age.to_i >= 18
      #  puts "Eres mayor de edad"
    # else
      #  puts "Eres menor de edad"
    # end


    #if age.to_i < 18
     #   puts "Eres mayor de edad"
    # elseif age.to_i < 65
      #  puts "Eres mayor de edad"
    # else
      #  puts "Eres jubilado"
    # end

    # or ||
    # and &&
    # not !=
    
    # if (age.to_i >= 18) && (age.to_i <= 65)
      #  puts "Estas en edad de trabajar"
    # else
      #  puts "No estas en edad de trabajar"
    # end


    if (age.to_i < 18) || (age.to_i > 65)
        puts "No estas en edad de trabajar"
    else
        puts "Estas en edad de trabajar"
    end

    # ! lo contrario
    if !(age.to_i < 18) 
        puts "No estas en edad de trabajar"
    else
        puts "Estas en edad de trabajar"
    end