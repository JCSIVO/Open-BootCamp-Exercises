// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Indizadores -> Indexadores

// Recurso que nos permite acceder a una estructura de datos de tipo matriz

// Declaracion del indizador

/*
class indizador
{
    public int this[int index]
{
    //
}
}
*/

/*
* Ejmeplo del array de Temperaturas
var TemperaturasDiarias = new Temperaturas();
TemperaturasDiarias[3] = 11.5f;
TemperaturasDiarias[9] = 7.5f;

// Ver los datos
for (int i = 0; i < TemperaturasDiarias.len; i++)
{
    Console.WriteLine($"Item: {TemperaturasDiarias[i]}");
}
*/



/*
// Ejemplo con Días de la semana
var semana = new DiasSemana();
Console.WriteLine(semana["MX"]);
try
{
    Console.WriteLine(semana["dia inventado"]);
}
catch (ArgumentOutOfRangeException e)
{
    Console.WriteLine(e.Message);
}


public class Temperaturas
{
    float[] temp = new float[10]
    {
        10f, 11f, 10f, 12f, 10f, 
        11f, 10f, 9f, 15f, 8f
    };
    public int len => temp.Length;

    // Indizador
    public float this[int index]
    {
        get => temp[index];
        set => temp[index] = value;
    }
}

class DiasSemana
{
    public string[] dias =
    {
        "L", "M", "MX", "J", "V", "S", "D"
    };
    public int this[string dia] => FindDayIndex(dia);
    private int FindDayIndex(string dia)
    {
        for (int j = 0; j < dias.Length; j++)
        {
            if (dias[j] == dia)
            {
                return j;
            }
        }
        throw new ArgumentOutOfRangeException(
            nameof(dia),
            $"El dia {dia} no está en la lista. Comprueba si esta bien escritoen formato L, M, MX..."
            );
    }
}




*/