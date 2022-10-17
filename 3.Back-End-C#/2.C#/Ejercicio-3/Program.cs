// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");


// Ejercicio 
// Estructura de datos para un cliente

Cliente miCliente = new Cliente
(
    "Francisco Martines",
    876345098,
    "c/ bielsa, 46",
    "francisco@email.com",
    true
);
Console.WriteLine(miCliente);

public struct Cliente 
{
    public Cliente(String nombre, int telefono, string direccion, string correo, bool nuevo)
    {
    name = nombre;
    phone = telefono;
    address = direccion;
    email = correo;
    isNew = nuevo;
    }

    public string name {get; set;}
    public int phone {get; set;}
    public string address {get; set;}
    public string email {get; set;}
    public bool isNew {get; set;}

    public override string ToString() => $"{name}, {phone}, {address}, {email}, {isNew}";
}




