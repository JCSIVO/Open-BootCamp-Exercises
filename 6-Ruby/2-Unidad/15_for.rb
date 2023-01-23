# iteración básica

for i in 0..5
    puts i
end 

# romper ejecución del bucle
for i in 0..5
    puts i
    if(i == 2)
        break
    end
end 


# Next saltar iteración pero sin salir

for i in 0..5
    if (i == 2)
        next
    end
    puts i
end 


# return -> Volver a ejecutar la inteacion repitela dos veces

for i in 0..5
    if (i == 2)
        redo
    end
    puts i
end 