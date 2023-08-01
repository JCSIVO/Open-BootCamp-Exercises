
// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Métodos

var moto = new Motos();
// moto.Arrancar();
Motos.Arrancar();
moto.ArrancarMoto();


// Extensión
ExtensionMotos.Acelerar();

// Retorno de métodos 
int gasolina = moto.CantidadGasolina();
Console.WriteLine($" Nos quedan {gasolina} litros de combustible");

// Sobrecargas
// int nivelDeposito = moto.EcharGasolina(10);
float nivelDeposito = moto.EcharGasolina(5.5f);
Console.WriteLine($"Ahora tenemos {nivelDeposito} litros de combustible");

// Definiciones
class Motos
{
    public static void Arrancar()
    {
        Console.WriteLine("Arranca");
    }
    public void ArrancarMoto()
    {
        Console.WriteLine("Arranco esta moto");
    }
    public int CantidadGasolina()
    {
        // Código
        int gasolina = 20; // litros
        return gasolina;
    }
    public int EcharGasolina(int litros)
    {
        int nivelDeposito = 20 + litros;
        return nivelDeposito;
    }
    public float EcharGasolina(float litros)
    {
        float nivelDeposito = 20 + litros;
        return nivelDeposito;
    }
    public double EcharGasolina(double litros)
    {
        double nivelDeposito = 20 + litros;
        return nivelDeposito;
    }
}