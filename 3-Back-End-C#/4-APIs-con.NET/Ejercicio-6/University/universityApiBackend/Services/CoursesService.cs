using Microsoft.EntityFrameworkCore;
using universityApiBackend.DataAccess;
using universityApiBackend.Models.DataModels;
using universityApiBackend.DataAccess;
using universityApiBackend.Models.DataModels;

namespace UniversityApiBackend.Services
{
    public class CoursesService : ICoursesService
    {
        private readonly UniversityDBContext _context;

        public CoursesService(UniversityDBContext context)
        {
            _context = context;
        }

        public IEnumerable<Course> GetCourseByCategory(string categoryName)
        {

            var courses = _context.Courses;

            var listCourses = from course in courses where course.Categories.Any(x => x.Name == categoryName) select course;

            return listCourses;
        }

        public IEnumerable<Course> GetCoursesWithNoChapter()
        {
            var courses = _context.Courses;

            var listCoursesWithNoChapters = from course in courses where course.Chapter != null select course;

            return listCoursesWithNoChapters;

        }

        public IEnumerable<Student> GetStudentsByCourse(string nameCourse)
        {
            var courses = _context.Courses;

            var listStudentsByCourse = courses!.Where(c => c.Name == nameCourse).SelectMany(x => x.Students);


            return listStudentsByCourse;
        }

        public IEnumerable<Chapter> GetChapterByCourse(string nameCourse)
        {
            var courses = _context.Courses;

            var listChapterByCourse = courses!.Where(c => c.Name == nameCourse).Select(x => x.Chapter);

            return listChapterByCourse;


        }

        public IEnumerable<Course> GetCoursesByCatAndLevel(string categoryName, Level level)
        {
            var courses = _context.Courses;

            var listCoursesByCatAndLevel = from course in courses
                                           where
                                           (course.Categories.All(c => c.Name == categoryName)) && course.Level == level
                                           select course;

            return listCoursesByCatAndLevel;
        }
    }
}