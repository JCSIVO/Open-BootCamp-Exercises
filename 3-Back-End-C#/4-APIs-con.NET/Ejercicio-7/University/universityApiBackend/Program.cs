// 1. Using to work with EntityFramework
using Microsoft.EntityFrameworkCore;
using Microsoft.OpenApi.Models;
using universityApiBackend;
using universityApiBackend.DataAccess;
using universityApiBackend.Services;

var builder = WebApplication.CreateBuilder(args);


// 2. Conection with SQL Server Express
const string CONNECTIONNAME = "UniversityDB";
var connectionString = builder.Configuration.GetConnectionString(CONNECTIONNAME);


// 3. Add Context to service of builder
builder.Services.AddDbContext<UniversityDBContext>(options =>options.UseSqlServer(connectionString));



// 7. Add Service of JWT Autorization
builder.Services.AddJwtTokenServices(builder.Configuration);


// Add services to the container.

builder.Services.AddControllers();



// Service for translate cultures
builder.Services.AddLocalization(options => options.ResourcesPath = "Resources");


// 4. Add Custom Services ( folder Services)
builder.Services.AddScoped<IStudentsService, StudentsService>();
// builder.Services.AddScoped<ICoursesService, CoursesService>();
// builder.Services.AddScoped<IUsersService, UsersService>();
// TODO: Add the rest of services 


// Supported cultures to translate

var supportedCultures = new[] { "en-US", "es-ES", "fr-FR", "de-de" }; // USA's english, Spain's Spanish and France's french
var localizationOptions = new RequestLocalizationOptions()
    .SetDefaultCulture(supportedCultures[0]) // English by default
    .AddSupportedCultures(supportedCultures) // Add all supported cultures
    .AddSupportedUICultures(supportedCultures); // Add supported cultures to UI;





// 8. Add Authorization
builder.Services.AddAuthorization(options =>
{
    options.AddPolicy("UserOnlyPolicy", policy => policy.RequireClaim("UserOnly", "User1"));
});


// Learn more about configuring Swagger/OpenAPI at https://aka.ms/aspnetcore/swashbuckle
builder.Services.AddEndpointsApiExplorer();

// 9. Config Swagger to take care of Autorization of JWT

builder.Services.AddSwaggerGen( options =>
{
    // We define the Security for authorization
    options.AddSecurityDefinition("Bearer", new OpenApiSecurityScheme
    {
        Name = "Authorization",
        Type = SecuritySchemeType.Http,
        Scheme = "Bearer",
        BearerFormat = "JWT",
        In = ParameterLocation.Header,
        Description = "JWT Authorization Header using Bearer Scheme"
    });

    options.AddSecurityRequirement(new OpenApiSecurityRequirement
    {
        {
            new OpenApiSecurityScheme
        {
            Reference = new OpenApiReference
            {
                Type = ReferenceType.SecurityScheme,
                Id = "Bearer"
            }
        },
        new string[]{ }
        }
        
    });

});


// 5. CORS Configuration
builder.Services.AddCors(options =>
    {
        options.AddPolicy(name: "CorsPolicy", builder =>
        {
            builder.AllowAnyOrigin();
            builder.AllowAnyMethod();
            builder.AllowAnyHeader();
        });
    });










var app = builder.Build();

// 3. ADD LOCALIZATION to App
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

// 6. Tell app to use CORS 
app.UseCors("CorsPolicy");

app.Run();
