// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

/*
Puerta door = new Puerta();
Console.WriteLine("Ancho: " + door.ancho);
Puerta door2 = new Puerta(150, 200, 0000, false);
door2.MostrarEstado();
door.MostrarEstado();
*/

/*Persona alumno = new Persona();
alumno.nombre = "Roger";
alumno.fechaNacimiento = Convert.ToDateTime("14/10/1998");
alumno.registrar();*/

// Antes de declarar un objeto
Persona alumno = new Persona();
Console.WriteLine(Persona.experiencia); // Acceder a un atributo estatico
Persona.Experiencia(); // Acceder a un metodo estatico

// Declarando un objeto 
alumno.Nombre = "Roger";
alumno.FechaNacimiento = Convert.ToDateTime("14/10/1998");
alumno.registrar();

Console.WriteLine("La edad del alumno " + alumno.Nombre + " es " + alumno.Edad);

class Puerta 
{
    public int ancho ;
    int alto;
    int color;
    bool abierta;

    // Constructoe de la clase
    public Puerta()
    {
        ancho = 100;
        alto = 100;
        color = 0000;
        abierta = false;
    }
    public Puerta (int ancho = 100, int alto = 100, int color = 10, bool abierta = false) 
    {
        this.ancho = ancho;
        this.alto = alto;
        this.color = color;
        this.abierta = abierta;
    }
    public void MostrarEstado()
    {
        Console.WriteLine($"Ancho: "+ ancho);
        Console.WriteLine($"Alto: " + alto);
        Console.WriteLine($"Color: "+ color);
        Console.WriteLine($"Abierta: " + abierta);
    }

    // Destructor
    ~Puerta()
    {
        // Codigo que se ejecuta cuando se destruye una puerta
        Console.WriteLine("La puerta se ha destruido");
    }
}
// Clase Persona con encapsulamiento mas abierto
/*
public class Persona 
{
    // Atributos
    public string nombre;
    public DateTime fechaNacimiento;
    private int edad;

    // Métodos
    public void registrar()
        {
            calcularEdad(fechaNacimiento);
            Console.WriteLine(nombre + " con " + edad + " años de edad ha sido regisrado correctamente");
        }
        private void calcularEdad(DateTime fechaNacimientoPersona)
        {
            DateTime fechaActual = DateTime.Now;
            edad = fechaActual.Year - fechaNacimientoPersona.Year;
        }
        
    
}*/

// Clase Persona con encapsulamiento mas Cerrado       
public class Persona
{
     // Atributos
    public static string experiencia = "C#";
    private string _nombre;
    private DateTime _fechaNacimiento;
    private int _edad;

    // Propiedades
    public int Edad
    {
        get // Encapsulación nivel abierto, por defecto es público porque la propiedad es publico
        {
            return _edad;
        }
        private set // Encapsulación nivel cerrado - Privado
        {
            _edad = value;
        }  
    }
    public string Nombre
    {
        get
        {
            return _nombre;
        }
        set
        {
            _nombre = value;
        } 
    }
    public DateTime FechaNacimiento
    {
        get
        {
            return _fechaNacimiento;
        }
        set
        {
            _fechaNacimiento = value;
        } 
    }
    // Métodos
    public static void Experiencia()
    {
        Console.WriteLine("Programación en C#");
    }
    public void registrar()
    {
        calcularEdad(FechaNacimiento);
        Console.WriteLine(Nombre + " ha registrado correctamente");
    }
    private void calcularEdad(DateTime fechaNacimientoPersona)
    {
        DateTime fechaActual = DateTime.Now;
        Edad = fechaActual.Year - fechaNacimientoPersona.Year;
    }
}