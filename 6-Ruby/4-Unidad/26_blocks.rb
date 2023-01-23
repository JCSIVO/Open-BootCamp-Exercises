# el bloque siempre estara encerrado entre do end y entre ellos se escriben las sentencias
# los bloques tambien se pueden exprear entre "llaves" -> {} y las variables van entre |variables|

names = %w{Maria Fran Lucia Belen }

names.each do|my_name|
    puts my_name
end

names.each { |my_name|
    puts my_name
}


do |nombre, apellido, apellido2|
    puts nombre
    puts apellido
    puts apellido2
 # sentencia 1
 # sentencia 2
 # sentencia N
end
