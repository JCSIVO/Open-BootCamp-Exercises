using Microsoft.VisualBasic;
using universityApiBackend.Models.DataModels;

namespace universityApiBackend
{
    public class Services1
    {
        public static List<User> Users = new List<User>()
        {
            new User()
            {
                Name = "Lucas",
                LastName = "Sanchez",
                Email = "lucas@3mail.com",
                Password = "123456"
            },
            new User
            {
                Name = "Isabel",
                LastName = "Larri",
                Email = "isi@email.com",
                Password = "123456"
            }
        };

        public static List<Student> Students = new List<Student>()
        {
            new Student()
            {
                Name = "Blanca",
                LastName = "Olivera",
                Dob = new DateTime(1994, 9, 24)

            }
        };

        public static List<Course> Courses = new List<Course>()
        {
            new Course()
            {
                Name = "Java",
                ShortDescription = "Java",
                Description = "Programing in Java advanced",
                Level = Level.Basic,
                Students = new List<Student>{
                    new Student
                    {
                        Name = "Marta"
                    }
                } 

            }
        };

        // Buscar usuarios por Email
        public static void findUserByEmail(string Email)
        {
            var myUsers = Users;
            var userList = from user in myUsers where user.Email.Equals(Email) select user;

            foreach (var user in userList)
            {
                Console.WriteLine(user.Email);
            }
            Console.WriteLine("");
        }

        // Buscar Usuarios mayores de edad 
        public static void findUsersOver18()
        {
            var myStudents = Students;  

            var studentList = from student in myStudents where student.DobYear(DateTime.Now.Year) >= 18   select student;
            foreach (var student in studentList)
            {
                Console.WriteLine(student.Name);
            }
            Console.WriteLine("");
        }
        // Buscar alumnos que al menos tengan un curso
        public static void findUsersWithAtLeastOneCourse()
        {
            var myStudents = Students;
            var studentList = from student in myStudents where student.Courses.Any()  select student;
            foreach (var student in studentList)
            {
                Console.WriteLine(student.Name);
            }
            Console.WriteLine("");
        }
        // Buscar cursos de un nivel determinado que al menos tengan un alumno inscrito
        public static void findCoursesByLevelAndStudent(Level level)
        {
            var myCourses = Courses;
            var coursesList = from course in myCourses where course.Level == level && course.Students.Any() select course;
            
            foreach (var courses in coursesList)
            {
                Console.WriteLine(courses.Name);
            }
            Console.WriteLine("");

        }
        // Buscar cursos de un nivel determinado que sean de una categoria determinada
        public static void findCoursesByLevelAndCategory(string category, Level level)
        {
            var myCourses = Courses;
            var coursesList = from course in myCourses where course != null && course.Level == level && course.Categories.Any() select course;

            foreach (var courses in coursesList)
            {
                Console.WriteLine(courses.Name);
            }
            Console.WriteLine("");
        }



        // Buscar cursos sin alumnos
        public static void findCourseWithoutStudent()
        {
            var myCourses = Courses;
            var coursesList = from course in myCourses where !course.Students.Any() select course;

            foreach (var course in coursesList)
            {
                Console.WriteLine(course.Name);
            }
            Console.WriteLine("");
        }

    }
}
