// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;

// Inyeccion de Dependencias 

using IHost host = Host.CreateDefaultBuilder(args)
    .ConfigureServices((_, services) =>
        services.AddTransient<ITransientOperation, DefaultOperation>()
        .AddScoped<IScopeOperation, DefaultOperation>()
        .AddSingleton<ISingletonOperation, DefaultOperation>()
        .AddTransient<OperationLogger>())
    .Build();

EjmepoloScopes(host.Services, "Scope 1");
EjmepoloScopes(host.Services, "Scope 2");

await host.StartAsync(); // Inicio Asincrono


static void EjmepoloScopes(IServiceProvider services, string scope)
{
    using IServiceScope serviceScope = services.CreateScope();
    IServiceProvider provider = serviceScope.ServiceProvider;

    OperationLogger logger = provider.GetRequiredService<OperationLogger>();
    logger.LogOperation($"{scope}: -- Ejecutando...GetRequiredService<OperationLogger>() ");

    Console.WriteLine();

    // logger = provider.GetRequiredService<OperationLogger>();
    // logger.LogOperation($"{scope}: -- Ejecutando...GetRequiredService<OperationLogger>() ");

    // Console.WriteLine();
}
