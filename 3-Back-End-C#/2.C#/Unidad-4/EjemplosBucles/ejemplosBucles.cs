// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Sumar los 100 primero numeros enteros
// Suma = 1 + 2 + 3 ... + 99 + 100
int i = 0;
int suma = 0;
for (i = 0; i <= 100; i++)
{
    suma += i;
}
Console.WriteLine(suma); // 5050

// Expandimos el código para que el usuario indique un numero hasta donde vanos a sumar
int j = 0;
int resultado = 0;
int limite = 0;
Console.WriteLine("Introduce el limite de la suma: ");
limite = Convert.ToInt32(Console.ReadLine());
for (j = 0; j <= limite; j++)
{
    resultado += j;
}
Console.WriteLine($"Resultado: {resultado}"); 


// Escribir todos los elementos de un array
int[] arr = new int[4];
arr[0] = 1;
arr[1] = 2;
arr[2] = 3;
arr[3] = 4;
// Console.WriteLine(arr);
Console.WriteLine("\nFor: ");
for (i = 0; i < arr.Length; i++)
{
    Console.WriteLine(arr[i] + " ");
}
Console.WriteLine("\nForEach: ");
foreach (var item in arr)
{
    Console.Write(item + " ");
}
Console.WriteLine("\nWhile: ");
while (i < arr.Length)
{
    Console.WriteLine(arr[i] + " ");
    i++;
}