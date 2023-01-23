puts "Edad: "
age = gets

case age.to_i
when 0
    puts "La edad es cero"
when 18
    puts "La edad es 18"
when 30
    puts "La edad es 30"
else
    puts "La edad no es ni cero, ni 18, ni 30"
end

# para aplicar rangos 0..17

case age.to_i
when 0..17
    puts "Eres menor de edad"
when 18..64
    puts "Estas en edad de trabajar"
when 65..100
    puts "Estas jubilado"
else
    puts "El valor introducido no es válido"
end