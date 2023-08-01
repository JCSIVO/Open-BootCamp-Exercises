using Microsoft.EntityFrameworkCore;
using universityApiBackend.Models.DataModels;

namespace universityApiBackend.DataAccess
{
    public class UniversityDBContext : DbContext
    {
        public UniversityDBContext(DbContextOptions<UniversityDBContext> options) : base(options) 
        {

        }
        // Add DbSets (Tables of our Data base)
        public DbSet<User>? Users { get; set; }
    }
}
