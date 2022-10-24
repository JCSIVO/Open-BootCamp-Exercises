// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
using System.Net;
// Conseguir un JSON de un API y usar su contenido

/*
* Creamos un request y un response para obtener el JSON
* request = peticion al servidor del API
* response = guardamos los datos que obenemos de la petición 
*/
HttpWebRequest request = (HttpWebRequest)WebRequest.Create("https://reqres.in/api/users?page=2");
HttpWebResponse response = (HttpWebResponse)request.GetResponse();

// Creamos un stream
Stream stream = response.GetResponseStream();
StreamReader reader = new StreamReader(stream);

var json = reader.ReadToEnd();
Console.WriteLine(json);