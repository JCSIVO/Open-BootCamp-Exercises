// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// LINQ
// 1. Nuestro origen de datos
int[] numbers = new int[10] {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
string[] str = new string[5] {"Blanca", "Belen", "Isabel", "Lucia", "Paloma"};
// 2. Obtener datos con una consulta
// Seleccionar numeros pares 
var pares = 
    from numero in numbers
    where (numero % 2) == 0
    select numero; 
var impares =
    from numero in numbers
    where (numero % 2) != 0
    select numero;
var nums =
    from numero in numbers
    where (numero > 5 && numero <= 8) 
    select numero;
var nombres =
    from el in str
    where (el.Length > 5)
    select el;
// 3. Ejecutar consulta


// Tipos Anónimos
// Car coche = new Car();
var coche = new {Marca = "Audi", Año = 2022};
Console.WriteLine($"Tengo un coche marca {coche.Marca} del año {coche.Año}");
MostraDato("Mercedes");


void MostraDato(string dato)
{
    var myVar = coche.Marca;
    Console.WriteLine(myVar + dato);
    // coche.Marca = str;
}


foreach (var num in pares)
{
    Console.Write(num + " ");
}
Console.WriteLine(" ");
foreach (var num in impares)
{
    Console.Write(num + " ");
}
Console.WriteLine(" ");
foreach (var num in nums)
{
    Console.Write(num + " ");
}
foreach (var el in nombres)
{
    Console.Write(el + " ");
}