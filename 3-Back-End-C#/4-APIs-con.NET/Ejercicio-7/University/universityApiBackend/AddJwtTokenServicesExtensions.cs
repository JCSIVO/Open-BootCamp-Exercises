using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.IdentityModel.Tokens;
using universityApiBackend.Models.DataModels;

namespace universityApiBackend
{
    public static class AddJwtTokenServicesExtensions
    {
        public static void AddJwtTokenServices(this IServiceCollection Services, IConfiguration configuration)
        {
            // Add JWT Settings 
            var bindJwtSettings = new JwtSettings();
            configuration.Bind("JsonWebTokenKeys", bindJwtSettings );

            // Add Singleton of JWT Settings
            Services.AddSingleton(bindJwtSettings);

            Services
                .AddAuthentication(options =>
                {
                    options.DefaultAuthenticateScheme = JwtBearerDefaults.AuthenticationScheme;
                    options.DefaultChallengeScheme = JwtBearerDefaults.AuthenticationScheme;
                })
                .AddJwtBearer(options =>
                {
                    options.RequireHttpsMetadata = false;
                    options.SaveToken = true;
                    options.TokenValidationParameters = new TokenValidationParameters()
                    {
                        ValidateIssuerSigningKey = bindJwtSettings.ValidateIssuerSigningKey,
                        IssuerSigningKey = new SymmetricSecurityKey(System.Text.Encoding.UTF8.GetBytes(bindJwtSettings.IssuerSigningKey)),
                        ValidateIssuer = bindJwtSettings.ValidateIssuer,
                        ValidIssuer = bindJwtSettings.ValidIssuer,
                        ValidateAudience = bindJwtSettings.ValidateAudiende,
                        ValidAudience = bindJwtSettings.ValidAudience,
                        RequireExpirationTime = bindJwtSettings.RequireExpirationTime,
                        ValidateLifetime = bindJwtSettings.ValidateLifeTime,
                        ClockSkew = TimeSpan.FromDays(1)
                    };
                });
        }
    }
}
