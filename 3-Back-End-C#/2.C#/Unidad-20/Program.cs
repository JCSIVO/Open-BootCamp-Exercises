// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
using System.Diagnostics;
// Depuración o Debugging, Debug
// Bug -> "error", "typo", "resultado incorrecto", etc...

Console.WriteLine("Escribe tu mensaje:");
var msg = Console.ReadLine();
Console.WriteLine($"He recibido este mensaje: {msg}");
int resultado = 0;
Stopwatch sw = new Stopwatch();
sw.Start();
for (int i = 0; i < 10; i++)
{
    resultado = i * i +1;
    // Console.WriteLine(resultado); // Error -> i^2 + 1
    // Operaciones que queremos controlar 
}
sw.Stop();
var tiempo = sw.Elapsed;
Console.ReadLine();