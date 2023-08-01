using System.ComponentModel.DataAnnotations;


namespace universityApiBackend.Models.DataModels
{
    public class BaseEntity
    {
        [Required]
        [Key]
        public int Id { get; set; }
        public string CreateBy { get; set; } = string.Empty;
        public DateTime CreateAt { get; set; } = DateTime.Now;
        public string UpdateBy { get; set; } = string.Empty;
        public DateTime? UpdateAt { get; set; }
        public DateTime? DeleteAt { get; set; }
        public string DeleteBy { get; set; } = string.Empty;
        public bool IsDeleted { get; set; } = false;



    }
}
