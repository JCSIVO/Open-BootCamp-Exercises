// See https://aka.ms/new-console-template for more information
//Console.WriteLine("Hello, World!");

// Ejercicio 1 - If

// Escribe un programa que:
// Pida datos a un cliente: Nombre, Email, Cupón.
// Determine si un cliente tiene un cupón de descuento
// Muestre un precio rebajado en función del descuento
// Muestre el precio de un producto sin descuento si no hay cupón

float precio = 16f;
Cliente cliente = new Cliente(); 

Console.WriteLine("Por favor introduce tu nombre");
cliente.Nombre = Console.ReadLine();

Console.WriteLine("Introduce el email");
cliente.Email = Console.ReadLine();

Console.WriteLine("¿Tienes Cupón? (True / False)");
cliente.Cupon = Convert.ToBoolean(Console.ReadLine());

Console.WriteLine(cliente);

if (cliente.Cupon == true)
{
    Console.WriteLine($"El precio del producto es {precio} pero con el cupon te cuesta {precio/2}");
}
else
{
    Console.WriteLine($"el producto te cuesta {precio}");
}
public struct Cliente
{
    public Cliente(string nom, string email, bool cupon)
    {
        Nombre = nom;
        Email = email;
        Cupon = cupon;
    }
    public string Nombre {get; set;}
    public string Email {get; set;}
    public bool Cupon {get; set;}

    public override string ToString() => $"({Nombre}, {Email}, {Cupon})";
}
