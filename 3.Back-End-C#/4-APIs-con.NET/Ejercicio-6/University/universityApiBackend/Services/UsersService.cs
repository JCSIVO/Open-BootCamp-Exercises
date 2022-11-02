using universityApiBackend.DataAccess;
using universityApiBackend.DataAccess;

namespace UniversityApiBackend.Services
{
    public class UsersService : IUsersService
    {
        private readonly UniversityDBContext _context;

        public UsersService(UniversityDBContext context)
        {
            _context = context;
        }

        public string getEmailById(int Id)
        {
            var user = _context.Users;

            var emailUser = user!.FirstOrDefault(x => x.Id == Id);


            return emailUser!.Email;


        }
    }
}