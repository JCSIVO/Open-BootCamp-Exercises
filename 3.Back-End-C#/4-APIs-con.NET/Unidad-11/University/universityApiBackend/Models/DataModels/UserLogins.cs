using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Diagnostics.CodeAnalysis;

namespace universityApiBackend.Models.DataModels
{
    public class UserLogins
    {
        [Required]
        public string UserName { get; set; } 
        [Required]
        public string Password { get; set; } 

       
    }
}
