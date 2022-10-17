// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Ejercicio 3
// Determina los operadores para verificar las siguientes condiciones

// Numero mayor o igual a 18
Console.WriteLine("Introduce un numero");
int numero = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("Numero es mayor o igual que  18: " + (numero == 18 || numero >18));

Console.WriteLine("Introduce una letra");
char letra = Convert.ToChar(Console.ReadLine());
Console.WriteLine("¿La letra es 'a'? " + (letra == 'a'));


Console.WriteLine("Introduce un segundo numero");
int numero2 = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("TRUE TRUE: " + (numero2 < 45 && numero2 > 60));


Console.WriteLine("Introduce un tercer numero");
int numero3 = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("TRUE FALSE: " + (numero3 < 45 || numero3 < 60));