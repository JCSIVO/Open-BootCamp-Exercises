// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Generics
/*
Generic<string> str = new Generic<string>();
str.Dato = "dato";
Console.WriteLine($"Generic.Dato: {str.Dato}");
Console.WriteLine($"Tipo de Generic Dato:  {str.Dato.GetType().FullName}");
Console.WriteLine($"Tipo de Generic Dato:  {str.GetType()}");
public class Generic<T>
{
    public T Dato { get; set; }
    // public int myInt { get; set; }
}


// Herencia 

Vehiculo vehiculo = new Vehiculo();
vehiculo.Arrancar();
// vehiculo.DetenerCoche(); No esta implementado en  la clase padre

Coche coche = new Coche();
coche.Arrancar();
coche.DetenerCoche();
coche.Arrancar("JCSIVO");

// Clase Parent o Padre
class Vehiculo
{
    public float combustible { get; set; }
    public int aforo { get; set; }
    public void Arrancar()
    {
        Console.WriteLine("Este vehiculo ha arrancado.");
    }
}

// Clase Child o Hija
class Coche : Vehiculo
{
    public int ruedas { get; set; }
    public void Arrancar()
    {
        Console.WriteLine("Este coche ha arrancado con éxito");
    }
    public void Arrancar(string str)
    {
        Console.WriteLine($"{str} ha arrancado este coche a las {DateTime.Now.ToShortTimeString()} ");
    }
    public void DetenerCoche()
    {
        Console.WriteLine("El coche se ha detenido");
    } 
}
*/

// Interfaces -> Plantilla o Contrato

Vehiculo vehiculo = new Vehiculo();
vehiculo.Marca = "marca";

interface IVehiculo
{
    void Arrancar();
    public string Marca { get; set; }
}

class Vehiculo : IVehiculo
{
    public string Marca { get; set; }
    void IVehiculo.Arrancar()
    {
        Console.WriteLine("Arrancar");
    }
}