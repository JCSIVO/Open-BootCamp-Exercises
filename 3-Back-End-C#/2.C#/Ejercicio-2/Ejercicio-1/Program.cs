// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");



// Ejercicio 1
// Programa que reciba datos de una persona y genere un mensaje, usa una 
// variable para cada dato y otra para el mensaje. EJ: nombre, apellido, edad, sabe programar

Console.WriteLine("Buenos días, ¿Me puede indicar cuales son sus datos?");

Console.WriteLine("Por favor intrdocuce tu nombre");
string nombre = Console.ReadLine();

Console.WriteLine("Por favor intrdocuce tus apellidos");
string apellidos = Console.ReadLine();

Console.WriteLine("¿Cual es tu edad?");
int edad = Convert.ToInt32(Console.ReadLine());

Console.WriteLine("¿Sabes programar (responder: True / False)?");
bool programar = Convert.ToBoolean(Console.ReadLine());


Console.WriteLine("Hola " + nombre + " " + apellidos + " tu edad es de " + edad + " años. " + "¿Sabes programar? " + programar);


