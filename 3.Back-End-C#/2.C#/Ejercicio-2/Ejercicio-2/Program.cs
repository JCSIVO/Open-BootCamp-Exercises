// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

Console.WriteLine("¿Que vehículo quieres describir?");
String vehiculo = Console.ReadLine();
Console.WriteLine("¿Cuantas puertas tiene?");
int puerta = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("¿Cuantas ruedas tiene?");
int ruedas = Convert.ToInt32(Console.ReadLine());
Console.WriteLine("¿Que marca de vehículo es?");
string marca = Console.ReadLine();
Console.WriteLine("¿Tiene la ITV en vigor (respuesta:True ó False)?");
bool itv =Convert.ToBoolean(Console.ReadLine()); 

Console.WriteLine("Es un vehiculo " + vehiculo + " tiene " + puerta + " y " + ruedas + " su marca es " + marca + " ITV en vigor " + itv);



Console.WriteLine("Describir caracterisiticas de la mesa");
String mesa = Console.ReadLine();
Console.WriteLine("¿Cuanto pesa?");
float peso = Convert.ToSingle(Console.ReadLine());
Console.WriteLine("¿que dimensiones tiene?");
float largo = Convert.ToSingle(Console.ReadLine());
Console.WriteLine("¿De que material esta hecho?");
string material = Console.ReadLine();
Console.WriteLine("y su color es:");
string color = Console.ReadLine();



Console.WriteLine("Es un vehiculo " + mesa + " pesa " + peso + " KG " + largo + " cm de largo y esta hecho de " + material + " y su color es: " + color);