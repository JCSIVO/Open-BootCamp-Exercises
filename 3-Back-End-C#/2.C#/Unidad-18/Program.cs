// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");

// Matrices
// m = ((1, 2)
//     (3, 4))

// 1D  -> 1 indice o index

// 1. Declarando un array conociendo el numero de elementos pero sin saber los elementos
int[] array = new int[2];
array[0] = 1;
array[1] = 2;

// 2. Declarando y fijando los valores del array
int[] array2 = new int[] { 1, 2, 3, 4 };

// 3. Sintaxis alternativa
int[] array3 = { 1, 2, 3 };

// Console.WriteLine(array3.Average());
Console.Write("Array3 = C ");
for (int i = 0; i < array3.Length; i++)
{
    array3[i] += 1;
}
// array3 -> (2,3,4)
foreach (int el in array3)
{
    Console.Write(el + " ");
}
Console.Write(")\n");
// Console.WriteLine(array.ToString());


// 2D

// 1. Declarando una matriz conociendo el numero de elementos pero sin saber los elementos
Console.WriteLine("\n--Matrices--\n");
int size = 2;  // Se suelen usar letras como n, m y n, etc..
// int[,] arr2D = new int[2,2];
int[,] matriz = new int[size,size];

// 2. Declaramos una matriz y asignamos los valores que tiene
/*
int rows = 2;
int cols = 3;
int[,] matriz3 = new int[rows, cols];
*/
int[,] matriz2 = { { 1, 2, 3 }, { 4, 5, 6 } } ;
Console.WriteLine($"Length: { matriz2.Length }"); // m x n -> 2 filas x 3 cols = 6
Console.WriteLine($"Rank: { matriz2.Rank }"); // Dimension de la matriz: 2 index

// 3. Cuando filas o columnas no son conocidas 
int[][] matriz4 = new int[3][];  // filas 0, 1, 2
matriz4[0] = new int[4] { 1, 2, 3, 4 }; // filas 0 asignamos 4 columnas con estos valores
matriz4[1] = new int[4] { 3, 4, 5, 6 };
matriz4[2] = new int[4] { 5, 6, 7, 8 };
// Console.WriteLine($"Tamaño: {matriz4.Length}"); // -> 4 = 4x1 -> 4 cols x 1 fila -> (1, 2, 3, 4)
// Console.WriteLine($"Tamaño: {matriz4.Rank}"); // Rank = 1



/*
* Suma de matrices
* A = ((1, 2 
        3 ,4))
* B = ((-1, 0 
        0 ,-1))
* C = ((0, 2 
        3 ,3))
 *
 */

int n = 2;
int[,] a = { { 1, 2 }, { 3, 4 } };
int[,] b = { { -1, 0 }, { 0, -1 } };
int[,] c = { { 0, 0 }, { 0, 0 } };




for (int j = 0; j < n; j++) // j = 0, 1  -> filas
{
    for (int k = 0; k < n; k++) // k = 0, 1, 2 ->columnas 
    {
        c[j, k] = a[j, k] + b[j, k];
        Console.Write(c[j,k] + "\t");
        // matriz[j,k] = j + k;
        // arr2D[j,k] = 1 ó 0
        /*if (matriz4[j][k] != null)
        {
            Console.Write(matriz4[j][k] + "\t");
        }
        else
        {
            matriz4[j][k] = 0;
            Console.Write(matriz4[j][k] + "\t");
        }*/
        
    }
    Console.WriteLine();
}
// (0,0) -> arr2D[0,0] -> 0
// (0,1) -> arr2D[0,1] -> 1
// (1,0) -> arr2D[1,0] -> 1
// (1,1) -> arr2D[1,1] -> 2