using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;



    public class UsuarioNoEncontradoException : Exception
    {
        public UsuarioNoEncontradoException()
        {
            Console.WriteLine("Ese usuario no existe");
        }
        public UsuarioNoEncontradoException(string message) : base(message)
        {

        }
        public UsuarioNoEncontradoException(string message, Exception ex) : base(message, ex)
        {
            // logica para la excepción
        }
    }
