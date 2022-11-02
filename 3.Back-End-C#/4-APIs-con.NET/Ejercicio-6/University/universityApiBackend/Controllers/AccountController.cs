using Microsoft.AspNetCore.Authentication.JwtBearer;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Localization;
using SharpDX.DXGI;
using universityApiBackend.DataAccess;
using universityApiBackend.Helpers;
using universityApiBackend.Models.DataModels;

namespace universityApiBackend.Controllers
{
    [Route("api/[controller]/[action]")]
    [ApiController]
    public class AccountController : ControllerBase
    {
        private readonly UniversityDBContext _context;
        private readonly JwtSettings _jwtSettings;

        private readonly IStringLocalizer<SharedResource> _sharedResourceLocalizer;

        public AccountController(UniversityDBContext context, JwtSettings jwtSettings, IStringLocalizer<SharedResource> sharedResourceLocalizer)
        {
            _context = context;
            _jwtSettings = jwtSettings;
            _sharedResourceLocalizer = sharedResourceLocalizer;
        }
        // Example Users
        // TODO: Change by real users in DB
        private IEnumerable<User> Logins = new List<User>()
        {
            new User()
            {
                Id = 1,
                Email = "jcsivo@email.com",
                Name = "Admin",
                Password = "Admin"
            },
             new User()
            {
                Id = 2,
                Email = "lucaso@email.com",
                Name = "User1",
                Password = "lucas"
            },
        };
        [HttpPost]
        public IActionResult GetToken(UserLogins userLogin)
        {
            try
            {
                var Token = new UserTokens();
                // TODO:
                // Search a user in context with LINQ
                var searchUser = (from user in _context.Users
                                  where user.Name == userLogin.UserName && user.Password == userLogin.Password
                                  select user).FirstOrDefault();
                // El firstOrDefault también puede hacerse sobre el contexto y después hacer la lógica de
                // comparación


                // TODO: Change to searchUser
                // var valid = Logins.Any(user => user.Name.Equals(userLogin.UserName, StringComparison.OrdinalIgnoreCase));

                if (searchUser != null)
                {
                    // var user = Logins.FirstOrDefault(user => user.Name.Equals(userLogin.UserName, StringComparison.OrdinalIgnoreCase));

                    Token = JwtHelpers.GenTokenKey(new UserTokens()
                    {
                        UserName = searchUser.Name,
                        EmailId = searchUser.Email,
                        Id = searchUser.Id,
                        GuidId = Guid.NewGuid(),

                    }, _jwtSettings);
                } else
                {
                    return BadRequest("Wrong Password");
                }
                // Ok ya devuelve un JSON  
                return Ok(Token);
            }
            catch (Exception ex)
            {
                throw new Exception("GetToken Error", ex);
            }
        }
        [HttpGet]
        [Authorize (AuthenticationSchemes = JwtBearerDefaults.AuthenticationScheme, Roles = "Administrator")]
        public IActionResult GetUserList()
        {
            return Ok(Logins);
        }
    }
}
