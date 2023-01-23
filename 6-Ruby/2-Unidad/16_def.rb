def area_rec(base, height)
    # sentencia 1
    # sentencia 2
    # ...
    base * height
end

print "Indica la base de tu rectangulo: "
b = gets.to_f
print "Indica la altura de tu rectangulo: "
h = gets.to_f

# area = area_rec(b, h)
puts "El area  de tu rectangulo es: #{area_rec(b, h)}"



go_to_exit = false

while !go_to_exit  # ! -> Es lo mismo que poner == false
    print "Indica la base de tu rectangulo: "
    b = gets.to_f
    print "Indica la altura de tu rectangulo: "
    h = gets.to_f

    # area = area_rec(b, h)
    puts "El area  de tu rectangulo es: #{area_rec(b, h)}"

    puts "Para salir introduce 0. Para continuar calculando, pulsa cuaqluier otro número"
    opt = gets.to_i

    if opt == 0
        go_to_exit = true
    end
end

puts "End. "