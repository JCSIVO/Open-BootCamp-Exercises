using universityApiBackend.Models.DataModels;

namespace universityApiBackend.Services
{
    public interface ICoursesService
    {
        IEnumerable<Course> GetCourseByCategory(string categoryName);
        IEnumerable<Course> GetCourseWithNoChapter();
        IEnumerable<Course> GetChapterByCourse(string nameCourse);
        IEnumerable<Course> GetStudentsByCourse(string nameCourse);
        IEnumerable<Course> GetCoursesByCatAnsLevel(string CategoryName, Level level);

    }
}
