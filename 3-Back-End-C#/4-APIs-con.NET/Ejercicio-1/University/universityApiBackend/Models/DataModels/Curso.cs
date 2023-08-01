using System.ComponentModel.DataAnnotations;

namespace universityApiBackend.Models.DataModels
{
    public class Curso
    {
        [Required, StringLength(50)]
        public string Name { get; set; } = string.Empty;

        [Required, StringLength(280)]
        public string ShortDescription { get; set; } = string.Empty;

        [Required]
        public string LongDescription { get; set; } = string.Empty;

        [Required]
        public string TargetAudiences { get; set; } = string.Empty;
        [Required]
        public string Objective { get; set; } = string.Empty;
        [Required]
        public string Requirements { get; set; } = string.Empty;

        public enum Level 
        {
            // A cada nivel se le ha asignado un numero para que no empieze desde el 0
            basic = 1, 
            Intermediate = 2, 
            Advanced = 3
        } 

    }
}
