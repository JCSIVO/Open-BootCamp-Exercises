using Microsoft.EntityFrameworkCore;
using universityApiBackend.DataAccess;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using universityApiBackend.Models.DataModels;
using AgeCalculator;
using AgeCalculator.Extensions;





namespace universityApiBackend
{
    public class Services  
    {
        public static List<User> Users = new List<User>
        {
            new User
            {
                    Email = "example@example.com",
                    LastName = "Cons",
                    Name = "Blanca",
                    Password = "123456",
                    Id = 1,
                    CreateBy = "Jcsivo",
                    CreateAt = DateTime.Now,
                    UpdateBy = "Jcsivo",
                    UpdateAt = DateTime.Now,
                    DeleteBy = "Jcsivo",
                    DeleteAt = DateTime.Now,
                    IsDeleted = true
                },
            new User
                {
                    Email = "example5@example.com",
                    LastName = "Larr",
                    Name = "Isab",
                    Password = "12345",
                    Id = 1,
                    CreateBy = "Jcsivo",
                    CreateAt = DateTime.Now,
                    UpdateBy = "Jcsivo",
                    UpdateAt = DateTime.Now,
                    DeleteBy = "Jcsivo",
                    DeleteAt = DateTime.Now,
                    IsDeleted = true
                }
            };

        public static List<Student> Students = new List<Student>{
            new Student
                { Name = "Jose",
                  Dob = new DateTime(1990,7,15),
                  Courses = new List<Course>{
                      new Course {
                          Name = "Nodejs",
                          ShortDescription = "Breve introduccions"
                      },
                      new Course {
                          Name = "C#",
                          ShortDescription = "Entity framework"
                      }
                  }
            },
        new Student
                { Name = "María",
                  Dob = new DateTime(2006,9,29),
                  Courses = new List<Course>()
            }
        };

        public static List<Course> Courses = new List<Course>
        {
            new Course {
                Name = "Curso principiantes c#",
                Level = Level.Basic,
                Students = new List<Student>{
                    new Student {
                    Name = "María",
                    Dob = new DateTime(2006,9,29)
                    },
                    new Student {
                    Name = "Juan Carlos",
                    Dob = DateTime.Now
                    }
                },
                Categories = new List<Category>{
                    new Category {
                        Name = "backend"
                    }
                }
            },
            new Course {
                Name = "Curso angular",
                Level = Level.Medium,
                Students = new List<Student>(),
                Categories = new List<Category>{
                    new Category {
                        Name = "frontend"
                    }
                }
            }
        };

        // Buscar usuarios por email
        public static void findUsersByEmail(String Email)
        {

            var myUsers = Users;

            var userList = from user in myUsers where user.Email.Equals(Email) select user;

            Console.WriteLine($"Usuarios con el email {Email} son: ");
            foreach (var user in userList)
            {
                Console.WriteLine(user.Name);
            }
            Console.WriteLine("");
        }

        // Buscar alumnos mayores de edad
        public static void findUsersOver18()
        {
            var myStudents = Students;

            var studentList = from student in myStudents where student.Dob.CalculateAge(DateTime.Now).Years >= 18 select student;

            Console.WriteLine("Usuarios mayores de edad son: ");
            foreach (var student in studentList)
            {
                Console.WriteLine(student.Name);
            }
            Console.WriteLine("");
        }


        //Buscar alumnos que tengan al menos un curso
        public static void findUsersWithAtLeastOneCourse()
        {
            var myStudents = Students;

            var studentList = from student in myStudents where student.Courses.Any() select student;

            Console.WriteLine("Estudiantes con al menos un curso: ");
            foreach (var student in studentList)
            {
                Console.WriteLine(student.Name);
            }
            Console.WriteLine("");
        }


        //Buscar cursos de un nivel determinado que al menos tengan un alumno inscrito

        public static void findCourseByLevelAndStudents(Level level)
        {

            var myCourses = Courses;

            var coursesList = from course in myCourses where course.Level == level && course.Students.Any() select course;

            Console.WriteLine($"Cursos del nivel {level} con al menos un inscrito: ");

            foreach (var course in coursesList)
            {
                Console.WriteLine(course.Name);
            }
            Console.WriteLine("");
        }


        //Buscar cursos de un nivel determinado que sean de una categoría determinada


        public static void findCoursesByLevelAndCategory(string category, Level level)
        {
            var myCourses = Courses;

            var listCourses = from course in myCourses where (course.Categories.Any(b => b.Name == category) && course.Level == level) select course;


            Console.WriteLine($"Lista de cursos con categoria {category} y nivel {level}");
            foreach (var curso in listCourses)
            {
                Console.Write(curso.Name + "--------------------->" + curso.Level);
            }


        }


        //Buscar cursos sin alumnos

        public static void findCoursesWOStudents()
        {

            var myCourses = Courses;

            var coursesList = from course in myCourses where !course.Students.Any() select course;

            Console.WriteLine($"Cursos sin estudiantes: ");
            foreach (var course in coursesList)
            {
                Console.WriteLine(course.Name);
            }
        }


    }

};


