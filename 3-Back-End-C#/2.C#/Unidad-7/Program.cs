// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Funcion Calcular Cuadrado
/*
int resultado = CalcularCuadrado(2); // 4
Console.WriteLine(resultado); // 4

CalcularAprobado(1);
CalcularAprobado(5);
CalcularAprobado(9);

// Scope, Contexto
int i = 0;
Console.WriteLine("i desde Main: " + i);
// CalcularCuadrado(6, i);
//Console.WriteLine("i desde Main: " + i);
int a = CalcularCuadrado(3, i);
Console.WriteLine(a);

int CalcularCuadrado(int n, int a)
{
    Console.WriteLine(n * n);
    // int i = 1;
    a = a +1;
    Console.WriteLine("a desde fun: " + a);
    // return n * n; // int
    return a ;
    // codigo
}

void CalcularAprobado(int a)
{
    if (a < 5)
    {
        Console.WriteLine("Has suspendido");
    }
    else if ( a ==5 )
    {
        Console.WriteLine("Aprobado raspado");
    }
    else
    {
        Console.WriteLine("Has aprobado");
    }
}
*/
// Funciones anónimas: (input-parameters) => expression

int[] numbers = {2, 3, 4, 5};
var squaredNumbers = numbers.Select(x => x * x );
Console.WriteLine(string.Join(" ", squaredNumbers));