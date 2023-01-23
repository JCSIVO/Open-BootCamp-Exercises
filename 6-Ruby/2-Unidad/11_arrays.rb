=begin

Comentarios de muchas líneas

Estrucutura general de un array
    Declaración,
    acceso y
    modificación
    
=end


# Array vacío
ages = []

# Declaración de un array con valores
names = ["Isabel", "Belen", "Blanca", "Lucia"]

# Acceder
puts names[2]
puts names[3]


# Modificar valor
names[3] = "Monica"

puts names[3]


# otra manera de hacer la misma declaración anterior %w

=begin
    Otra fórmula para declarar arrays
=end
names = %W{Pedro Francisco Juan Lucas }

# Recorrer un array
=begin
    Recorrido de un array
=end
names.each do |my_name|
    # Acciones
    puts my_name
end


# Eliminar posición de un array

names.delete('Francisco')

names.each do |my_name|
    puts my_name
end


=begin
    Métodos de
    especial interés
=end

puts names.length # Indica la longitud del array (Números de elementos que contiene el array)

puts names.first # Indica el primer elemento del arrayç
puts names.last # Indica el último valor del array


ages[8,23,3,12,4,50,2]

puts ages.sort  # Ordenar cada uno de los elemtos

