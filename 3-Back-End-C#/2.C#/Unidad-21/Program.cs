// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

using System.Diagnostics;

// Sort y Complejidad

int[] arr; 
Console.WriteLine("Introduce numero de elementos");
int N = Convert.ToInt32(Console.ReadLine());
// int N = 1000;
arr = new int[N];

for (int i = 0; i < N; i++)
{
    arr[i] = 1;
}
Stopwatch crono = new Stopwatch();
crono.Start();
for (int j = 0; j < N; j++)
{
    for (int k = N-1; k > 0; k--)
    {
        arr[k] = j + k;
    }
}
crono.Stop();
Console.WriteLine($"Para {N} elementos, se tarda: {crono.Elapsed} segundos");


/* N  Complejidad n^2
* 1000
* 10000 
* 100000 00:00:00.2657275
*/