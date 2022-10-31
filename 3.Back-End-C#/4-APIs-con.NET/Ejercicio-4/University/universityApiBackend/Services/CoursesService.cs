using universityApiBackend.Models.DataModels;

namespace universityApiBackend.Services
{
    public class CoursesService : ICoursesService
    {
        public IEnumerable<Course> GetChapterByCourse(string nameCourse)
        {
            throw new NotImplementedException();
        }

        public IEnumerable<Course> GetCourseByCategory(string categoryName)
        {
            throw new NotImplementedException();
        }

        public IEnumerable<Course> GetCoursesByCatAnsLevel(string CategoryName, Level level)
        {
            throw new NotImplementedException();
        }

        public IEnumerable<Course> GetCourseWithNoChapter()
        {
            throw new NotImplementedException();
        }

        public IEnumerable<Course> GetStudentsByCourse(string nameCourse)
        {
            throw new NotImplementedException();
        }
    }
}
