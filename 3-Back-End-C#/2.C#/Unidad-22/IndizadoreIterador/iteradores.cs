/* Iteradores -> collections, List, arrays
* - Aplicar una operación/ acción a cada elemento
* - Enumerar una lista personalizada
* - LINQ -> query o consulta
* - Canalizar los datos a otro proceso
*/ 

List<string> lista = new List<string>{ "item 1", "item 2", "item 3" };
// var numeros = new IEnumerable<int>();

// Sync
foreach (var item in lista)
{
    Console.WriteLine(item.ToString());
}


// Async
/*await foreach (var item in lista)
{
    Console.WriteLine(item.ToString());
}

*/

IEnumerable<int> NumerosEnteros()
{
    yield return 1;
    yield return 2;
    yield return 3;
}

IEnumerable<int> EscribirNumerosEnteros()
    {
        int index = 0;
        while (index < 3)
        {
            yield return index++;
        }
    }

    async IAsyncEnumerator<int> EscribirNumerosEnterosAsync()
    {
        int index = 0;
        while (index < 1)
        {
            yield return index++;
        }
        await Task.Delay(1000);
        while (index < 3)
        {
            yield return index++;
        }
        // Recargar accion
    }
