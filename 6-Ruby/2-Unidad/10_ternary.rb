# Ejemplo
print "Indica tu edad: "
age = gets 


# If tradicional
if age.to_i >= 18
    puts "Eres mayor de edad"
else
    puts "Eres menos de edad"    
end


# Operador ternario
# Estructura
# Condicion ? true : false

age.to_i >= 18 ? (puts "Eres mayor de edad") : (puts "Eres menor de edad")