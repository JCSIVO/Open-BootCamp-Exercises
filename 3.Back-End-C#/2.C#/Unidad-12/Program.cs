// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
using System.Collections.Generic;
using System.Collections.Concurrent;
using System.Collections;


// Collections 

// Collections de strings
/*
var coches = new List<string>();
coches.Add("Audi");
coches.Add("Mercedes");
coches.Add("BMW");

var coches2 = new List<string>{ "Renault", "Peugeot", "Fiat" };


foreach (var el in coches)
{
    Console.WriteLine(el + " ");
}

List<Elemento> elemento = CrearLista();

var query = from el in elemento where el.NumeroAtomico < 20
    select el;

foreach (Elemento el  in query)
{
    Console.WriteLine($"Nombre: {el.Nombre}, Simbolo {el.Simbolo}, Numero Atomico {el.NumeroAtomico}");
}
    Console.WriteLine(query);
*/

/*
ListarCoches();

static void ListarCoches()
{
var cars = new List<Car>
    {
        { new Car() { Name = "car1", Color = "blue", Speed = 20 } },
        { new Car() { Name = "car2", Color = "red", Speed = 50 } },
        { new Car() { Name = "car3", Color = "green", Speed = 10 } },
        { new Car() { Name = "car4", Color = "blue", Speed = 50 } },
        { new Car() { Name = "car5", Color = "blue", Speed = 30 } },
        { new Car() { Name = "car6", Color = "red", Speed = 60 } },
        { new Car() { Name = "car7", Color = "green", Speed = 50 } }
    };
    cars.Sort();
    foreach (Car coche in cars)
    {
        Console.Write($"{coche.Color}, {coche.Name}, {coche.Speed}");
        Console.WriteLine();
    }
}

class Car : IComparable<Car>
{
    public string Name { get; set; }
    public string Color { get; set; }
    public int Speed { get; set; }

    public int CompareTo(Car other)
    {
        // A call to rhis method makes a single comparison that is
        // used for sorting

        // Determine the relative order of the objects being compared.
        // Sort by color alphabetically, and then by speed in
        // descending order.

        // Compare the colors
        int compare;
        compare = String.Compare(this.Name, other.Name, true);

        // If the colors are the same, compare the speeds
        if (compare == 0)
        {
            compare = this.Speed.CompareTo(other.Speed);
            // Use descending order for speed;
            compare = -compare; // +compare Ascendiente
        }
        return compare;
    }
}
*/

/*
static List<Elemento> CrearLista()
{
    return new List<Elemento>
    {
            { new Elemento() {Simbolo = "K", Nombre = "Potasio", NumeroAtomico = 20} } ,
            { new Elemento() {Simbolo = "Ca", Nombre = "Calcio", NumeroAtomico = 19} },
            { new Elemento() {Simbolo = "Ti", Nombre = "Titanio", NumeroAtomico = 22} } 
    };
}
public class Elemento
{
    public string Simbolo { get; set; }
    public string Nombre { get; set; }
    public int NumeroAtomico { get; set; }
}
*/

// Clase de Collección Personalizada
var colors = new MisColores();
foreach (Color theColor in colors)
{
    Console.WriteLine($"Color: { theColor.Nombre }, HEX: { theColor.CodigoHex }, Opacidad { theColor.Opacidad }");
}

public class MisColores : System.Collections.IEnumerable
{
    private Color[] _colores =
    {
        new Color() { Nombre = "rojo" , CodigoHex = "CB3234", Opacidad = 0.55f}, 
        new Color() { Nombre = "azul", CodigoHex = "0000FF" }, 
        new Color() { Nombre = "verde", CodigoHex = "008F39" }
    };
    public System.Collections.IEnumerator GetEnumerator()
    
    {
        return new ColoresEnumerator(_colores);
        // return _colores.GetEnumerator();
    }
    private class ColoresEnumerator : System.Collections.IEnumerator
    {
        private Color[] _colores;
        private int _position = -1;

        public ColoresEnumerator(Color[] colores)
        {
            _colores = colores;
        }
        object System.Collections.IEnumerator.Current
        {
            get 
            {
                return _colores[_position];
            }
        }
        bool System.Collections.IEnumerator.MoveNext()
        {
            _position++;
            return (_position < _colores.Length);
        }
        void System.Collections.IEnumerator.Reset()
        {
            _position = -1;
        }

    }
    

}

public class Color
{
    public string Nombre { get; set; }
    public string CodigoHex { get; set; }
    public float Opacidad { get; set; }
}