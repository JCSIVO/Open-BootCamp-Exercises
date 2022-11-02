var builder = WebApplication.CreateBuilder(args);

// Add services to the container.

// 1. LOCALIZATION
builder.Services.AddLocalization(options => options.ResourcesPath = "Resources");




builder.Services.AddControllers();
// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddEndpointsApiExplorer();
builder.Services.AddSwaggerGen();

var app = builder.Build();



// 2. SUPPORTED CULTURES
var supportedCultures = new[] { "en-US", "es-ES", "fr-FR" }; // USA´s English, Spain´s Spanish, french´s France
var localizationOptions = new RequestLocalizationOptions()
    .SetDefaultCulture(supportedCultures[0]) // English by default
    .AddSupportedCultures(supportedCultures) // Add all supported cultures
    .AddSupportedUICultures(supportedCultures); // Add Supported cultures to UI

// 3. Add LOCALIZATION to App
app.UseRequestLocalization(localizationOptions);




// Configure the HTTP request pipeline.
if (app.Environment.IsDevelopment())
{
    app.UseSwagger();
    app.UseSwaggerUI();
}

app.UseHttpsRedirection();

app.UseAuthorization();

app.MapControllers();

app.Run();
