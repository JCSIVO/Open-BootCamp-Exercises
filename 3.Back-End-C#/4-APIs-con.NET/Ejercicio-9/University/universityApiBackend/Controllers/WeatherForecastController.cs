using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace universityApiBackend.Controllers
{
    [ApiController]
    [Route("[controller]")] // Localhost:7208/WeatherForecast
    public class WeatherForecastController : ControllerBase
    {
        private static readonly string[] Summaries = new[]
        {
        "Freezing", "Bracing", "Chilly", "Cool", "Mild", "Warm", "Balmy", "Hot", "Sweltering", "Scorching"
    };

        private readonly ILogger<WeatherForecastController> _logger;

        public WeatherForecastController(ILogger<WeatherForecastController> logger)
        {
            _logger = logger;
        }
        // Método: Get => Get to Localhost:7208/WeatherForecast
        [HttpGet(Name = "GetWeatherForecast")]
        // [Authorize(AuthenticationSchemes =JwtBearerDefaults.AuthenticationScheme, Roles ="Administrator, User")]
        public IEnumerable<WeatherForecast> Get()
        {
            _logger.LogTrace($"{nameof(WeatherForecastController)} - {nameof(Get)} - Trace Level Log");
            _logger.LogDebug($"{nameof(WeatherForecastController)} - {nameof(Get)} - Debug Level Log");
            _logger.LogInformation($"{nameof(WeatherForecastController)} - {nameof(Get)} - Information Level Log");
            _logger.LogWarning($"{nameof(WeatherForecastController)} - {nameof(Get)} - Warning Level Log");
            _logger.LogError($"{nameof(WeatherForecastController)} - {nameof(Get)} - Error Level Log");
            _logger.LogCritical($"{nameof(WeatherForecastController)} - {nameof(Get)} - Critical Level Log");

            return Enumerable.Range(1, 5).Select(index => new WeatherForecast
            {
                Date = DateTime.Now.AddDays(index),
                TemperatureC = Random.Shared.Next(-20, 55),
                Summary = Summaries[Random.Shared.Next(Summaries.Length)]
            })
            .ToArray();
        }
    }
}