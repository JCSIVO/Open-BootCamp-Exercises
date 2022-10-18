// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

//Bucles - Parte 2

// IF ... ELSE - SI / SINO

/*Console.WriteLine("¿Que dia es hoy?");
// string hoy = "Lunes";
string hoy = Console.ReadLine();
if (hoy == "Lunes")
{
    Console.WriteLine("Feliz Lunes");
}
else
{
    Console.WriteLine("Hoy no es Lunes");
}

// SWITCH - CAMBIAR

Console.WriteLine("¿Que dia es hoy?");
string dia = Console.ReadLine().ToUpper(); // ToLower() -> minusculas 
switch (dia)
{
    case "Lunes":
        Console.WriteLine("Es lunes");
        // comando u operaciones 
        break; // Romper o parar
    case "Martes":
        Console.WriteLine("Es Martes");
        break;
        // Resto de dias de la semana
    default:
        Console.WriteLine("Ese día no lo conozco");
        break;
}
// Resto del programa


// BREAK
string hoyEs = "Lunes";
Console.WriteLine("Antes del IF");
if (hoyEs == "LUNES")
{
    for (int i = 0; i < 3; i++)
    {
        Console.WriteLine("Lunes");
        break; // Sin el break repite 3 con el solo 1 vez
    }
    Console.WriteLine("Despues del break");
}
Console.WriteLine("Despues del IF");

// CONTINUE

for (int z = 0; z < 10; z++)
{
    Console.WriteLine(z);
    if (z < 5) // z == 5
    {
        Console.Write("Z es menor que 5");
        continue; // break 
    }
}*/