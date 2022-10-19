// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
/*
float f = 3.1415f;
EscribirNumeroReal(f);

void EscribirNumeroReal(float n)
{
    Console.WriteLine(n.ToString("#.###"));
}

void SumaDeNumerosReales(float a, float b)
{
    float resultado = a + b;
    Console.WriteLine(resultado.ToString("#.#"));
}
void SumaDeNumerosReales(double a, double b)
{
    double resultado = a + b;
    Console.WriteLine(resultado.ToString("#.#"));
}*/

// Recursividad
/*
*
* Factorial -> !
* 1! = 1 -> Definición
* 2! = 2 * 1 = 2
* 3! = 3 * 2 * 1 = 6
*/

// Console.WriteLine(CalculaFactorial(20));
/*for (int i = 0; i < 10; i++)
{
    long resultado = CalculaFactorial(i);
    Console.WriteLine(i + ": " + resultado);
}

long CalculaFactorial(int n)
{
    if (n == 1)
    {
        return 1; // Cuando n = 1 devolvemos 1 y terminamos la recursividad
    }
    return n * CalculaFactorial(n-1);
}*/

// Creación de Objetos

Puerta door = new Puerta();
door.CambiarAlto(200); // cm
door.Abrir();
door.MostrarEstado(); // ancho: 200 cm
// código
door.Cerrar();
door.MostrarEstado();

public class Puerta
{
    int ancho;
    float alto;
    string color;
    string material = "madera";
    bool abierta = false;

    
    public void CambiarAlto(int n)
    {
        alto = n;
    }
    public void CambiarAlto(float f)
    {
        // alto = Convert.ToInt32(f)
        alto = f;
    }
    public void PintarPuerta(string color)
    {
        this.color = color;
    }

    public void Abrir()
    {
        abierta = true;
    }
    public void Cerrar()
    {
        abierta = false;
    }
    public void MostrarEstado()
    {
        Console.WriteLine("Ancho: {0}", ancho);
        Console.WriteLine("Alto {0}", alto);
        Console.WriteLine("Material {0}", material);
        Console.WriteLine("Color {0}", color);
        Console.WriteLine("¿Abierta? {0}", abierta);
    }
}