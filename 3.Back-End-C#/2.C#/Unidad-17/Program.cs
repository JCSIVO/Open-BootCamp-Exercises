// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Excepciones

Console.WriteLine($"1 entre 2: { DivisionSegura(1,2) }"); // Comprobamos que funciona

try
{
    Console.WriteLine($"1 entre 0: { DivisionSegura(1,0) }"); // Infinito 
}
catch (Exception ex)
{
    Console.WriteLine($"Error. Ha ocurrido esto: {ex.Message}");
}
// Continuamos con el programa si capturamos la excepción (catch)
Console.WriteLine($"1 entre 3: { DivisionSegura(1,3) }");
// Console.WriteLine($"0 entre 0: { DivisionSegura(0,0) }"); // NaN -> No es un número 


int[] arr = new int[3];
arr[0] = 0;
arr[1] = 1;
arr[2] = 2;
try
{
    Console.WriteLine(arr[3]);
}
catch (Exception ex)
{
    Console.WriteLine(ex.Message);
}
finally
{
    Console.WriteLine("¿Es correcto el valor que aparece?");
    // logica para que el usuario verifique si el valor es correcto
}
Console.WriteLine("Fin del programa");


static double DivisionSegura(double a, double b)
{
    if (b == 0)
    {
        throw new DivideByZeroException();
        throw new UsuarioNoEncontradoException();
    }
    return a / b;
}




/*
* Tipos
* Exceptio -> clase base de las Excepciones
* IndexOutOfRangeException -> Se intento pedir un elemento que no existe en un array, etc...
* NullReferenceException -> Se pidio un objeto null
            object obj = null;
            obj.ToString();
* ArgumentException -> clase base para Excepciones relacionadas con argumentos
* ArgumentNullException
            string str = null;
            str.Substring(0, 2);
* ArgumentOutOfRangeException
            string str = "string";
            str.Substring(0, str.Length + 1);
*/

