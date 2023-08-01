// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Multithreading
using System;
using System.Diagnostics;
using System.Threading;
// Sin Multithreading
/*
Stopwatch crono = new Stopwatch();
crono.Start();

// Tarea 1
Thread.Sleep(1000); // Esta tarea dura 1 segundo

// Tarea 2
// Thread.Sleep(1000); // Esta tarea dura 1 segundo

for (int i = 0; i < 400000000; i++)
{
    i *= 1;
}

// Tarea 3
Thread.Sleep(1000); // Esta tarea dura 1 segundo


crono.Stop();
Console.WriteLine($"Este programa a tardado: { crono.Elapsed } segundos");
*/
// Main Thread o Hilo Principal

// Asignar nombre al Main Thread
/*
Thread hiloPrincipal = Thread.CurrentThread;
hiloPrincipal.Name = "Hilo Principal";
Console.WriteLine($"Estamos en el hilo: { hiloPrincipal.Name }");
*/

Stopwatch crono = Stopwatch.StartNew();

// Task 1 
var task1 = new Task (() =>
{
    Stopwatch crono = Stopwatch.StartNew();
    Thread.Sleep(1000); // Parar este hilo 1 segundo
    crono.Stop();
    Console.WriteLine($"1. El hilo a tardado: { crono.Elapsed } segundos");
});
var task2 = new Task (() =>
{
    Stopwatch crono = Stopwatch.StartNew();
    Thread.Sleep(2000); // Parar este hilo 1 segundo
    crono.Stop();
    Console.WriteLine($"2. El hilo a tardado: { crono.Elapsed } segundos");
});
var task3 = new Task (() =>
{
    Stopwatch crono = Stopwatch.StartNew();
    Thread.Sleep(1000); // Parar este hilo 1 segundo
    crono.Stop();
    Console.WriteLine($"3. El hilo a tardado: { crono.Elapsed } segundos");
});

// Iniciamos los tasks o Tareas
task1.Start();
task2.Start();
task3.Start();

// Recibir las tareas de forma individual
/*
await task1;
await task2;
await task3;
*/

// Recibir las tareas de forma colectiva
// await Task.WhenAll(task1, task2, task3); // Recibimos todas las tareas iniciadas cuando se completan
crono.Stop();
Console.WriteLine($"Todo el programa ha durado: { crono.Elapsed } segundos");


// Descomentar toda esta sección para usar el método del principio
/*Iniciamos hilo
 * Pasamos referencia con ThreadStart -> refHilo := método que ejecutamos al iniciar nuevo hilo
 * 
    Stopwatch crono2 = new Stopwatch();
    crono2.Start();
    ThreadStart refHilo = new ThreadStart(IniciarHilos);
    Thread hiloSecundario = new Thread(refHilo);
    hiloSecundario.Start();
    Thread.Sleep(1000);
    crono2.Stop();
    Console.WriteLine($"El hilo2 a tardado: { crono2.Elapsed } segundos");
*/



// Task
/*
Stopwatch crono3 = new Stopwatch();
crono3.Start();
Thread hilo3 = new Thread(refHilo);
hilo3.Start();
Thread.Sleep(1000);
crono3.Stop();
Console.WriteLine($"El hilo3 a tardado: { crono3.Elapsed } segundos");
*/


// Recolectamos los tasks completados

// Finalizamos el programa

static void IniciarHilos()
{
    Console.WriteLine($"Iniciando hilo nuevo...");
    Console.WriteLine("Finalizadno tareas");
}
