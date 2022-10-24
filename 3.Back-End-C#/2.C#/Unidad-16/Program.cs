// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Crear Archivos TXT y realizar operaciones

using System.IO;

string texto;

// Escribir en un archivo TXT

try
{
    StreamWriter sw = new StreamWriter("miArchivo.txt", true);
    sw.WriteLine("Estoy escribiendo en mi archivo.txt");
    sw.WriteLine("Añado esta otra nueva linea");
    sw.WriteLine("Otra Linea");
    sw.Close();
}
catch (Exception ex)
{
    Console.WriteLine("Ha ocurrido un error: " + ex.Message);
}


// Leer un archivo en la carpeta del proyecto  Archivos
try
{
    StreamReader sr = new StreamReader("miArchivo.txt");
    var linea = sr.ReadLine();
    while (linea != null) // hasta finalizar documento
    {
        // Repetimos la acción -> Leer linea
        Console.WriteLine(linea);
        linea = sr.ReadLine();
    }
    sr.Close(); // Cerramos el stream asociado al archivo
    Console.ReadKey();
}
catch (Exception ex)
{
    Console.WriteLine("Ha ocurrido un error: " + ex.Message);
    // logger
}
finally
{
    Console.WriteLine("Final del try-catch-finally");
}


/* Operaciones con archivos: 
* Crear archivo
* Leer -> no modifica el contenido // modo lectura
* Escribir -> SÍ modifica y borra lo anterior // modo escritura 
* Append -> Escribe añadiendo contenido al final, NO BORRA LO ANTERIOR // modo append -> log
*/


