// Operadores 
// Aritméticos + - * / % ++ --

int i  = 0;
/*Console.WriteLine("Suma: " + (i + 1));

// Autoincrementos 
Console.WriteLine("Autoincremento: " + ++i);
i = i + 1;
Console.WriteLine("Autoincremento: " + --i);
i = i - 1;
Console.WriteLine("Valor: " + i);*/

/*int i = 4;
Console.WriteLine("División: " + i);
Console.WriteLine("División: " + i / 4); // Resultado es entero*/

// Operadores de Asignación

// int j = 2;
// int k = 1;
// j = j + 3;
// Console.WriteLine("Sumarle 3:" + j );
// Console.WriteLine("Sumarle 3:" + (j+=3));
// Console.WriteLine("j: " + j);

// Operadores de comparación 
/*Console.WriteLine("Iguales? " +(j == k));
Console.WriteLine("DesIguales? " +(j != k));
Console.WriteLine("j mayor? " +(j > k));
Console.WriteLine("j menor? " +(j < k));*/

// Operadores lógicos -> && || !
int a = 9;
int b = 11;
// Y -AND
Console.WriteLine("AND - Y");
Console.WriteLine("TRUE TRUE: " + (a<10 && b>10));
Console.WriteLine("FALSE TRUE: " + (a>10 && b>10));
Console.WriteLine("TRUE FALSE: " + (a<10 && b<10));
Console.WriteLine("FALSE FALSE: " + (a>10 && b<10));

// O - OR
Console.WriteLine("OR - O");
Console.WriteLine("TRUE TRUE: " + (a<10 || b>10));
Console.WriteLine("FALSE TRUE: " + (a>10 || b>10));
Console.WriteLine("TRUE FALSE: " + (a<10 || b<10));
Console.WriteLine("FALSE FALSE: " + (a>10 || b<10));

// NO -NOT
Console.WriteLine("NOT - NO");
Console.WriteLine("TRUE: " + !(a<10));
Console.WriteLine("FALSE: " + !(a>10));
