using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.IdentityModel.Tokens;
using System.Configuration;
using universityApiBackend.Models.DataModels;

namespace universityApiBackend
{
    public static class AddJwtTokenServicesExtensions
    {
        public static void AddJwtTokenServices(this IServiceCollection Services, IConfiguration configuration)
        {
            //Add JWT Setting
            var bindJwtServices = new JwtSettings();

            configuration.Bind("JsonWebTokenKeys", bindJwtServices);

            //Add Singleton of JWT Setting
            Services.AddSingleton(bindJwtServices);

            Services.AddAuthentication(options =>
            {
                options.DefaultAuthenticateScheme = JwtBearerDefaults.AuthenticationScheme;
                options.DefaultChallengeScheme = JwtBearerDefaults.AuthenticationScheme;
            }).AddJwtBearer(options =>
            {
                options.RequireHttpsMetadata = false;
                options.SaveToken = true;
                options.TokenValidationParameters = new TokenValidationParameters()
                {
                    ValidateIssuerSigningKey = bindJwtServices.ValidateIssuerSigningKey,
                    IssuerSigningKey = new SymmetricSecurityKey(System.Text.Encoding.UTF8.GetBytes(bindJwtServices.IssuerSigningKey)),
                    ValidateIssuer = bindJwtServices.ValidateIssuer,
                    ValidateAudience = bindJwtServices.ValidateAudience,
                    ValidIssuer = bindJwtServices.ValidIssuer,
                    ValidAudience = bindJwtServices.ValidAudience,
                    RequireExpirationTime = bindJwtServices.RequiredExpirationTime,
                    ValidateLifetime = bindJwtServices.ValidateLifetime,
                    ClockSkew = TimeSpan.FromDays(1)
                };
            });
        }
    }
}
