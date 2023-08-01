// See https://aka.ms/new-console-template for more information
//Console.WriteLine("Hello, World!");

// Ejercicio 2 - Switch

// Haz una lista de lenguajes de programación, por ejemplo: C#, Java, C++,.
// Presenta la lista en consola y pide que el usuario seleccione el lenguaje mediante
// 1,2,3 oa,b,c.Presenta el resultado en consola.
// Nota: Puedes añadir al resultado el "Hola, mundo" para el caso de C#.

List<string> lenguajesProgramación = new List<string>()
{
    "0 - Python",
    "1 - Java",
    "2 - JavaScript",   
    "3 - C#"
};
foreach (var item in lenguajesProgramación)
{
    Console.WriteLine(item);
}

Console.WriteLine("Introduce un valor numerico");
int valor  = Convert.ToInt32(Console.ReadLine());

switch (++valor)
{
    case 1:
        Console.WriteLine("Python");
        break;
    case 2:
        Console.WriteLine("Java");
        break;
    case 3:
        Console.WriteLine("JavaScript");
        break;
    case 4:
        Console.WriteLine("C# = Hola, mundo");
        break;
    default:
        Console.WriteLine("No conozco ese lenguaje");
        break;
}