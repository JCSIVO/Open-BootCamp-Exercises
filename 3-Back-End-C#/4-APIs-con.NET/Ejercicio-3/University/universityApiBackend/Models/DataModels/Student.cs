using System.ComponentModel.DataAnnotations;

namespace universityApiBackend.Models.DataModels
{
    public class Student :BaseEntity
    {
        [Required]
        public string Name { get; set; } = string.Empty;
        [Required]
        public string LastName { get; set; } = string.Empty;
        [Required]
        public DateTime Dob { get; set; }

    public ICollection<Course>  Courses { get; set; } = new List<Course>();

        internal int DobYear(int year)
        {
            year = (DateTime.Now.Year) - Convert.ToInt32(DobYear);
            if (year >= 18 ) 
            {
                return year;
            }
            throw new NotImplementedException();
        }
    }
}
