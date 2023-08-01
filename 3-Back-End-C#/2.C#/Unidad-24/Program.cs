// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
using Factory;
// Patrones de Diseño

// Probando Factory

new Cliente().Main();


//Probando Singleton
/*
Singleton s1 = Singleton.GetInstance();
Singleton s2 = Singleton.GetInstance();

if (s1 == s2)
{
    Console.WriteLine("Singleton funciona !!");
}
else
{
    Console.WriteLine("Singleton fallo, las instancias son distintas");
}
*/

// Definiciones 

class Cliente
{
    public void Main()
    {
        Console.WriteLine("Probando Factory");
        ClienteMetodo(new ConcretoFactory1());
        ClienteMetodo(new ConcretoFactory2());
        Console.WriteLine();
    }

    public void ClienteMetodo(IAbstractFactory factory)    
    {
        var ProductA = factory.CreateProductA();
        Console.WriteLine(ProductA.MetodoA());
        var ProductB = factory.CreateProductB();
        Console.WriteLine(ProductB.MetodoB());
    }
}


