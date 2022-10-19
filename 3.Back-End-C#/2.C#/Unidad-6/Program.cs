using System.Text;
// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Cadenas
/*
string str;
string str2 = null;
string str3 = System.String.Empty;
string str4 = "";
string str5 = " ";
// Tipo y Salida
Console.WriteLine(str2.GetType);
Console.WriteLine(str3.GetType());
Console.WriteLine($"str4: {str4}");
Console.WriteLine(str4.GetType());

// Array de chars y string
char[] letters = { '#', '€', '$' };
Console.WriteLine(letters[0]);
string str6 = "#€$";
Console.WriteLine(str6[0]);

// Concatenación

string msg1 = "Buenos días";
// Código
string msg2 = "Estoy programando en C#";
// imprimir un mensaje
Console.WriteLine(msg1 + " ," + msg2);

string msg3 = msg1 + msg2;
string msg4 = msg1;
msg4 += msg2; // mensaje completo
Console.WriteLine(msg4);

// Literales
// Caracteres escapados -> \n \u00C6 \r \t
string columns = "Colum1\tColum 2\tColum 3";
string hr = "---------------------------------";
string content = "contenido1 \ncontenido1\ncontenido1\tconenido2\tcontenido3 contenido4";
Console.WriteLine(columns);
Console.WriteLine(hr);
Console.WriteLine(content);
// Filas
string rows = "contenido1 contenido1 contenido1\r\ncontenido2 contenido2 contenido2\r\nRow 3";
Console.WriteLine(rows);

// Algunos caracteres escapados \' \" \\ \v etc.

string multilinea = "Hola, " +
"Este es un mesaje" +
"en varias lineas";
string multilinea2 = @"Hola, este
es un mensaje de
varias lineas
sin concatenar";

string comillas = @"El se autoproclama ""Programador"".";
Console.WriteLine(comillas);

// Interpolación

var persona = (nombre: "JCSIVO", nacimiento: 1998, edad: "22", lenguaje: "C#");
// Console.WriteLine(persona);
Console.WriteLine($"{persona.nombre} es un hombre de {2022 - persona.nacimiento} años y le gusta programar en {persona.lenguaje}");


// Subcadenas
string miCadena = "Este es mi mensaje   ";
// Substring, Replace, IndexOf
string miCadena2 = miCadena.Substring(0,10);
Console.WriteLine(miCadena2);
string miCadena3 = miCadena.Replace("mensaje", "podcast");
Console.WriteLine(miCadena3);
// Limpiar espacios
string miCadena4 = miCadena.Trim();
Console.WriteLine(miCadena4);
// Encontrar caracter 
int index = miCadena.IndexOf('m');
Console.WriteLine(index);


// Srings  nulos y vacíos
string str = "hola";
string nullStr = null;
string emptyStr = String.Empty;

string tempStr = str + nullStr;
Console.WriteLine(tempStr);

bool b = (emptyStr == nullStr); // Camel Case -> miVariable, myArrayStr
Console.WriteLine(b);

string newStr = emptyStr + nullStr;
Console.WriteLine(newStr);
Console.WriteLine(emptyStr.Length);
// Console.WriteLine(nullStr.Length);
Console.WriteLine(newStr.Length);

// Añadimos valores
nullStr = "a";
Console.WriteLine(nullStr.Length); // 1

emptyStr = "";
emptyStr += nullStr;
Console.WriteLine(emptyStr); // a


// StringBuilder

StringBuilder strBuilder = new StringBuilder("Hola mundo");
Console.WriteLine(strBuilder[0]); // H
Console.WriteLine(strBuilder); // Hola mundo


// Transformar una cadena a número si es posible

decimal i = 0;
string s = "121221";
// string s = "Hola";
bool result = decimal.TryParse(s, out i);
Console.WriteLine(result + " , i: " + i);


// Arrays

int[] arr = new int[2]; // (1,2)

string[] names = new string[2]; // indices 0, 1
names[0] = "Jhon Doe";
names[1] = "Jhon Wick";

foreach (string elemento in names)
{
    Console.WriteLine(elemento);
}

for (int j = 0; j < names.Length; j++) // names.Length-1
{
    Console.WriteLine(names[j]);
}

int[] numbers = {4, 0, 6, 1, 3, 10};
Array.Sort(numbers); // Ordenamos el array de ints
foreach (int  elemento in numbers)
{
    Console.WriteLine(elemento);
}
*/

// Más tipos de Arrays

int [,] miArray2D = new int[2,2]; // 1 2 
                                // 3 4

miArray2D[0,0] =1;
miArray2D[0,1] =2;
miArray2D[1,0] =3;
miArray2D[1,1] =4;



for (int k = 0; k < 2; k++)
{
    for (int l = 0; l < 2; l++)
    {
        Console.Write(miArray2D[k, l] + " ");
    }
    Console.WriteLine("");
}
Console.WriteLine(miArray2D.Length);// 4
