using ExampleFlujoAsync;
using System.Diagnostics;

// Iniciamos un contador de tiempo - Sincrona
Stopwatch stopwatch = new Stopwatch();
stopwatch.Start();

Console.WriteLine("\n**************************************************");
Console.WriteLine("\nBienvenid@ a la calculadora de Hipotecas Sincronas");
Console.WriteLine("\n * ***********************************************");

var aniosVidaLaboral = CalculadoraHipotecaSync.ObtenerAniosVidaLaboral();
Console.WriteLine($"\nAños de vida laboral obtenidos: { aniosVidaLaboral }");

var esTipoContratoIndefinido = CalculadoraHipotecaSync.EsTipoContratoIndefinido();
Console.WriteLine($"\nTipo de Contrato Indefinido: { esTipoContratoIndefinido }");


var sueldoNeto = CalculadoraHipotecaSync.ObtenerSueldoNeto();
Console.WriteLine($"\nSueldo neto obtenido: { sueldoNeto } €");

var gastosMensuales = CalculadoraHipotecaSync.ObtenerGastosMensuales();
Console.WriteLine($"\nGastos Mensuales obtenidos: { gastosMensuales } €");


var hipotecaConcedida = CalculadoraHipotecaSync.AnalizarInformacionParaConcederHipoteca(
    aniosVidaLaboral, esTipoContratoIndefinido, sueldoNeto, gastosMensuales, cantidadSolicitada: 50000, aniosPagr: 30);

var resultado = hipotecaConcedida ? "APROBADA" : "DENEGADA";

Console.WriteLine($"\nAnalisis finalizado. Su solicitud de hipoteca ha sido: { resultado }");

stopwatch.Stop();

Console.WriteLine($"\nLa operción síncrona ha durado { stopwatch.Elapsed }");


// REiniciamos un contador de tiempo Asincrona
stopwatch.Restart();
Console.WriteLine("\n * ***************************************************");
Console.WriteLine("\nBienvenidnos a la calculadorea de Hipotecas Asincronas");
Console.WriteLine("\n * ***************************************************");

Task<int> aniosVidaLaboralTask = CalculadoraHipotecaAsync.ObtenerAniosVidaLaboral();
Task<bool> esTipoContratoIndefinidoTask = CalculadoraHipotecaAsync.EsTipoContratoIndefinido();
Task<int> sueldoNetoTask = CalculadoraHipotecaAsync.ObtenerSueldoNeto();
Task<int> gastosMensualesTask = CalculadoraHipotecaAsync.ObtenerGastosMensuales();


var analisisHipotecaTask = new List<Task>
{
    aniosVidaLaboralTask,
    esTipoContratoIndefinidoTask,
    sueldoNetoTask,
    gastosMensualesTask,
};

while (analisisHipotecaTask.Any())
{
    Task tareaFinalizada = await Task.WhenAny(analisisHipotecaTask);

    if (tareaFinalizada == aniosVidaLaboralTask)
    {
        Console.WriteLine($"\nAños de vida laboral obtenidos: { aniosVidaLaboralTask.Result }");
    }
    else if (tareaFinalizada == esTipoContratoIndefinidoTask)
    {
        Console.WriteLine($"\nTipo de Contrato Indefinido: { esTipoContratoIndefinidoTask.Result }");
    }
    else if (tareaFinalizada == sueldoNetoTask)
    {
        Console.WriteLine($"\nSueldo neto obtenido: { sueldoNetoTask.Result } €");
    }
    else if (tareaFinalizada == gastosMensualesTask)
    { 
        Console.WriteLine($"\nGastos Mensuales obtenidos: { gastosMensualesTask.Result } €");
    }
    analisisHipotecaTask.Remove(tareaFinalizada); // eliminamos de la lista de tareas para ir vaciando y salir del While
}

var hipotecaAsyncConcedida = CalculadoraHipotecaAsync.AnalizarInformacionParaConcederHipoteca(
    aniosVidaLaboralTask.Result, esTipoContratoIndefinidoTask.Result, sueldoNetoTask.Result, gastosMensualesTask.Result, cantidadSolicitada: 50000, aniosPagr: 30);

var resultadoAsync = hipotecaAsyncConcedida ? "APROBADA" : "DENEGADA";

Console.WriteLine($"\nAnalisis finalizado. Su solicitud de hipoteca ha sido: {resultadoAsync}");

stopwatch.Stop();

Console.WriteLine($"\nLa operción Asincronaa ha durado {stopwatch.Elapsed}");

Console.Read(); // Para que no se cierre la terminal