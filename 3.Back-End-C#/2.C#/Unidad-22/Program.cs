// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

/* Delegados
* Referencia a un metodo := variable -----> método
* <modificador de acceso> delegate <tipo de retorno><nombre>(<parametros>[]);
* public                  delegate       void       ImprimirDocDelegado(string path)
*
*
* Delegados disponibles por defecto
* - Action<T>                  -> Siempre devuelve void, de 0 a 16 params de tipo Generics
                                    Action<string> -> recibe string, devuelve void
* - anónimos                   -> definir con sintaxis lambda
* - Func<in T, out TResult>    -> Fuc<int, string> -> recibe int y retorna string
* - Predicate<T>               -> Siempre devuelve un boolean
*/

// Pedimos el string mensaje y lo guardamos en msg
Console.WriteLine("Main");
Console.WriteLine("Escribe un mensaje para el Delegado");
string msg = Console.ReadLine();



/* Usando el delegado que hemos usado con "...delegate void..."
*
ImprimirDelegadoClase obj = new ImprimirDelegadoClase();
// obj.EjempoloDelegado("Este es mi mensaje");
obj.EjempoloDelegado(msg);
*/
/*
// Usando Action<string>
ImprimirConActionClass obj = new ImprimirConActionClass();
obj.EjemploAction(msg);
*/

// Usando Delegado Anonimo 
ImprimirConDelegadoAnonimo obj = new ImprimirConDelegadoAnonimo();
obj.EjemploConDelegadoAnonimo(msg);


// Definiciones
public delegate void ImprimirDelegado(string value);
public class ImprimirDelegadoClase
{
    private void Imprimir(string value)
    {
        Console.WriteLine($"He recibido este valor: {value}");
    }
    public void EjempoloDelegado(string str)
    {
        // Declaración 
        ImprimirDelegado imprimirDelegado = new ImprimirDelegado(Imprimir);
        //Invocación -> Call
        imprimirDelegado(str);
    }
}

public class ImprimirConActionClass
{
    private void Imprimir(string msg)
    {
        Console.WriteLine(msg);
    }
    public void EjemploAction(string msg)
    {
        Action<string> imprimirDelegadoAction = Imprimir;
        imprimirDelegadoAction(msg);
    }
}

public class ImprimirConDelegadoAnonimo
{
    public void EjemploConDelegadoAnonimo(string msg)
    {
        /* Definición regular / estandar 
        *
        Action<string>imprimirConAction = delegate (string msg)
    {
        Console.WriteLine($"Desde Delegado Anonimo: { msg }");
    };*/

    //Definición con lambda
    Action<string> imprimirConActionLambda = x => Console.WriteLine($"Desde delegado anonimo lmabda: {x}");
    // imprimirConAction(msg);
    imprimirConActionLambda(msg);


    // Func
    Func<int, string> resultado = v => $"El resultado es: {v}";
    Console.WriteLine(resultado(5));


    Func<int, int, int> multiplicar = (v1,v2) => v1 * v2;
    int producto = multiplicar(3, 2);
    Console.WriteLine(producto);


    // Predicate

    Predicate<int> esMayorDeEdad = e => e >= 18;
    bool mayorDeEdad = esMayorDeEdad(21); // True




    }
    
}