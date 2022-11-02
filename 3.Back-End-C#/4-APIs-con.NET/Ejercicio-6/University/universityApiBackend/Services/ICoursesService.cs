using universityApiBackend.Models.DataModels;


namespace UniversityApiBackend.Services
{
    public interface ICoursesService
    {
        IEnumerable<Course> GetCourseByCategory(string categoryName);

        IEnumerable<Course> GetCoursesWithNoChapter();

        IEnumerable<Chapter> GetChapterByCourse(string nameCourse);

        IEnumerable<Student> GetStudentsByCourse(string nameCourse);

        IEnumerable<Course> GetCoursesByCatAndLevel(string categoryName, Level level);


    }
}