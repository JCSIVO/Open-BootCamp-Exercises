// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

using System.Diagnostics;
using System.Threading;
using System.Threading.Tasks;

// Programación asíncrona

Stopwatch sw = Stopwatch.StartNew();

// Stopwatch crono = new Stopwatch();
// crono.Start();
//código, Task, etc...
// Task 1
var task1 = new Task(() => 
{
    Stopwatch crono = new Stopwatch();
    crono.Start();
    Thread.Sleep(1000);
    crono.Stop();
    // crono.Start();
    Console.WriteLine($"Task1: {crono.Elapsed}");
});
/*int num = 0;
for (int i = 0; i < 10000000; i++)
{
    num += i;
}*/
var task2 = new Task(() => 
{
    Stopwatch crono = new Stopwatch();
    crono.Start();
    Thread.Sleep(1000); // 1
    crono.Stop();
    Console.WriteLine($"Task2: {crono.Elapsed}");
});
var task3 = new Task(() => 
{
    Stopwatch crono = new Stopwatch();
    crono.Start();
    Thread.Sleep(1000);
    crono.Stop();
    // crono.Start();
    Console.WriteLine($"Task3: {crono.Elapsed}");
});

var task4 = new Task(async() => 
{
    var str = await RandomAsync(); // En un caso real async Task puede tardar (mili)segundos
    Console.WriteLine(str);
});

task1.Start();
// Código
task2.Start();
// Código
task3.Start();
// Código
task4.Start();

await task1;
await task2;
await task3;
await task4;


// var str = await RandomAsync(); // En un caso real async Task puede tardar (mili)segundos
// Console.WriteLine(str);

sw.Stop();
Console.WriteLine($"Main: { sw.Elapsed }");

static async Task<string> RandomAsync()
{
    Stopwatch sw = Stopwatch.StartNew();
    {
        var num = new Random().Next(1000);
        Thread.Sleep(1000);
        sw.Stop();
        var str = $"{ num.ToString() } calculado en: { sw.Elapsed }";
        // Console.WriteLine(str);
        return str;
    }
}