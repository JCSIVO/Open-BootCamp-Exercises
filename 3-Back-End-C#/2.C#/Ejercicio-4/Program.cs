// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Ejercicio 1 - While
// Escribir una tabla de multiplicar del 1 al 10

Console.WriteLine("¿Introduce el numero de la tabla de multiplicar?");
int tabla = Convert.ToInt32(Console.ReadLine());
int numero = 0;
int resultado = 0;
Console.WriteLine("Has elegido la tabla de multiplicar del: " + tabla);
while (numero <= 10)
{
    resultado = tabla * numero;
    Console.WriteLine($"{tabla} x {numero} = {resultado}");
    numero++;
}


// Ejercicio 2 - Do While
// Programa que realice ciertos pasos
// recibir al menos un numero por consola
// determinar si el numero es positivo o negativo
// Presente un contador para cada tipo

int contador = 0;
int contadorPositivo = 0;
int contadorNegativo = 0;
do
{
    Console.WriteLine("Por favor introduce un numero");
    int numero2 = Convert.ToInt32(Console.ReadLine());
    if (numero2 < 0)
    {
        contadorNegativo++;
        contador++;
        Console.WriteLine($"Numero introducido es: {numero2} y su contador es {contadorNegativo}");

    }
    else if (numero2 > 0)
    {
        contadorPositivo++;
        contador++;
        Console.WriteLine($"Numero introducido es: {numero2} y su contador es {contadorPositivo}");
    }
    else{
        contador++;
        Console.WriteLine($"Numero introducido es: {numero2} y su contador es {contador}");
    }
    Console.WriteLine("ContadorNegativo " + contadorNegativo + " Positivo: " + contadorPositivo + " contador: " + contador);
} while (contador <= 5);


// Ejercicio 3 - For
// Programa que realice una seria de pasos:

Console.WriteLine("¿Introduce el ancho del rectangulo?");
int ancho = Convert.ToInt32(Console.ReadLine());

Console.WriteLine("¿Por favor introduce el alto del rectangulo?");
int alto = Convert.ToInt32(Console.ReadLine());

Console.WriteLine("¿Lo quieres relleno?(Y/N):");
string conRelleno = Console.ReadLine();
Console.WriteLine("¿Cuanto de relleno lo quieres? (numero):");
int cantidad = Convert.ToInt32(Console.ReadLine());

string relleno = new string('*', cantidad);

for (int i = 0; i < alto; i++)
{
    for (int j = 0; j < ancho; j++)
    {
        if ((conRelleno == "N") && (i > 0 && i < alto -1) && (j > 0 && j < ancho -1))
        {
            Console.Write(" ");
        }
        else
        {
            {
                Console.Write(relleno);
            }
        }
    }
    Console.Write("\n");
}
Console.WriteLine("¿Cuantas figuras quieres como la que has dibujado?");
    int totalFiguras = Convert.ToInt32(Console.ReadLine());

    contador = 1;
    
    while (contador <= totalFiguras)
    {
        for (int i = 0; i < alto; i++)
{
    for (int j = 0; j < ancho; j++)
    {
        if ((conRelleno == "N") && (i > 0 && i < alto -1) && (j > 0 && j < ancho -1))
        {
            Console.Write(" ");
        }
        else
        {
            {
                Console.Write(relleno);
            }
        }
        
        Console.Write("\n");
    }
}
    contador++;
    Console.WriteLine("\n");
}