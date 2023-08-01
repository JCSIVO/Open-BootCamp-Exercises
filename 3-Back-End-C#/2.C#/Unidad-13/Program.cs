// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// DateTime, TimeOnly y DateOnly
/*
var ahora = DateTime.Now;
Console.WriteLine(ahora);
var hora = ahora.ToShortTimeString();
Console.WriteLine(hora);
var fecha = ahora.ToShortDateString();
Console.WriteLine(fecha);

TimeOnly soloHora = new TimeOnly(14, 30, 50, 600);
Console.WriteLine(soloHora);
DateOnly soloFecha = new DateOnly(2022, 07, 22);
Console.WriteLine(soloFecha.ToLongDateString());



// Usos de Interfaces 
var persona = new Persona();
// persona.PreguntarNombre();
// Console.WriteLine(persona.Nombre);
public class Persona : IPersona
{
    public string Nombre { get; set; }
    public string Apellido { get; set; }
    public int Edad { get; set; }
    public bool EnActivo { get; set; }
    public DateOnly FechaNacimiento { get; set; }
    public Persona()
    {
        PreguntarDatos();
        EscribirDatos();
    }
    public void PreguntarDatos()
    {
        Console.WriteLine("¿Cual es tu nombre?");
        var nombre = Console.ReadLine();
        if (nombre == null)
        {
            // mensaje cuando no introdujo nombre
        }
        else
        {
            Nombre = nombre;
        }
        Console.WriteLine("¿Cual es tu fecha de nacimiento? (aaaa/mm/dd)");
        var fecha = Console.ReadLine();
        FechaNacimiento = DateOnly.Parse(fecha);
    }
    public void EscribirDatos()
    {
        Console.WriteLine($"Nombre: {Nombre}, Fecha Nacimiento { FechaNacimiento }");
    }
}
public interface IPersona
{
    public string Nombre { get; set; }
    public string Apellido { get; set; }
    public int Edad { get; set; }
    public bool EnActivo { get; set; }
    public DateOnly FechaNacimiento { get; set; }

    public void PreguntarDatos(); 
    public void EscribirDatos();
}

// Enums

// Casos de uso: constantes
// Estaciones, días de la semana, meses, etc.

Console.WriteLine((int)Estaciones.Verano); // 0
Console.WriteLine(Estaciones.Verano); // Verano
Console.WriteLine((int)CodigosDeError.Desconocido); // 1


enum Estaciones 
{
    Verano, 
    Primavera,
    Otoño,
    Invierno
}

enum CodigosDeError : ushort
{
    Ninguno = 0,
    Desconocido = 1,
    SinConexion = 100,
    Conexion = 200
}
*/

// Tuplas o tuples

(string, double, int) miTupla = ("JCSIVO", 4.6d, 7);
Console.WriteLine(miTupla);
Console.WriteLine($"Item1: {miTupla.Item1}, Item2: { miTupla.Item2 }, Item3: { ++miTupla.Item3 }");

int miSuma = 0;
for (int i = 0; i <= 100; i++)
{
    miSuma += i;
}
double cociente = 20 / 5d;

(int Suma, double Division) otraTupla = (miSuma, cociente);
Console.WriteLine($"Item1: {otraTupla.Item1}, Item2: { otraTupla.Item2 }");

var tuplaInt = (1, 2, 3, 4, 5, 6);
Console.WriteLine(tuplaInt.GetType());

