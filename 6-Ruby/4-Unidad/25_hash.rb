=begin
{
    nombre: "Isabel",
    apellido: "Larriba"
    edad: 27
}

persona.apellido
=end

=begin
# Formato tradicional
persona = {
    "nombre" => "Isabel",
    "apellido" => "Larriba",
    "edad" => 28
}

puts persona # muestra todos los valores
puts persona["nombre"]
=end

persona = {
    nombre: "Isabel",
    apellido: "Larriba",
    edad: 29
}

puts persona[:nombre]