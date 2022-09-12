package com.example.singleton.EjercicioResuelto;

    /**
     * Un patrón de diseño es una solución reutilizable para un problema que ocurre dentro de un contexto de programación dado. ¿Qué significa eso? Pues que, en ocasiones, los programadores encuentran el mismo problema varias veces en distintos proyectos. Por eso, en vez de que cada uno aporte o diseñe su propia solución, se crean los patrones de diseño en Java.

Los patrones de diseño en Java son, en definitiva, soluciones a problemas recurrentes y que se ha documentado que funcionan y los resuelven.

Un patrón proporciona una descripción abstracta de un problema de diseño y cómo lo resuelve con una disposición general de elementos

No obstante, no se puede simplemente copiar y pegar un patrón de diseño en Java en el código y esperar haber resuelto los problemas que había. Por el contrario, se debe escribir una implementación para ese patrón para introducirla en el código.

Elementos de los patrones de diseño

En general, un patrón de diseño en Java tiene cuatro elementos esenciales:

Es un identificador que se puede usar para describir el problema de diseño, sus soluciones y las consecuencias en una o dos palabras.
Este elemento describe cuándo se puede aplicar el patrón y explica el problema y el contexto del mismo.
Solución. Describe los elementos que componen el diseño. La solución no describe la implementación concreta, porque un patrón es como una plantilla que se puede aplicar en muchas situaciones diferentes.
Son los resultados esperables de aplicar el patrón de diseño en Java.
Ventajas de los patrones de diseño en Java

Usar un patrón de diseño tiene algunas ventajas. Permiten usar una solución que se sabe que funciona y evitan que los programadores tropiecen con problemas que ya se han resuelto.

Además, los patrones de diseño también sirven como ayudas para la comunicación en el proceso de desarrollo.

Tipos de patrones de diseño en Java

Los patrones de diseño en Java se pueden clasificar en varios grupos fundamentales. Cada uno de ellos con subgrupos y patrones específicos. En cada caso, sus funcionalidades y utilidades son distintas. Por lo que para poder dominarlos es necesario que te especialices en Java.

Podemos dividir los patrones de diseño en tres grupos fundamentales:

Conductual
Creacional
Estructural
Vamos a ver en detalle cómo funcionan estos tres tipos de patrones de diseño en Java.

Patrones de comportamiento

Los patrones de comportamiento describen interacciones entre objetos y se centran en cómo los objetos se comunican entre sí. Pueden reducir los diagramas de flujo complejos a simples interconexiones entre objetos de varias clases.

Existen los siguientes patrones de comportamiento:

Chain of responsibility
Command
Interpreter
Iterator
Mediator
Memento
Observer
State
Strategy
Template method
Visitor
Además, también se utilizan para hacer que el algoritmo de una clase utilice simplemente otro parámetro que se puede ajustar en tiempo de ejecución.

Los patrones de comportamiento están relacionados con los algoritmos y la asignación de responsabilidades entre objetos.

Patrones de creación

Los patrones de creación se utilizan para crear objetos para una clase adecuada que sirva como solución a un problema. Generalmente se usan cuando se encuentran disponibles instancias de varias clases diferentes:

Abstract Factory
Builder Patterns
Factory Method
Prototype
Singleton
Son particularmente útiles cuando aprovecha el polimorfismo y necesita elegir entre diferentes clases en tiempo de ejecución en lugar de en tiempo de compilación.

Además, los patrones de creación permiten que los objetos se creen en un sistema sin tener que identificar un tipo de clase específico en el código, por lo que no es necesaria una programación compleja para la creación de una instancia.

Patrones estructurales

Los patrones estructurales forman estructuras más grandes a partir de elementos únicos, generalmente de diferentes clases.

Adapter
Bridge
Composite
Decorator
Facade
Flyweight
Proxy
Cuando hablamos de patrones de diseño estructurales, nos referimos a aquellos que componen las clases y los objetos para formar estructuras más grandes.

Este tipo de patrones de diseño en Java utilizan la herencia para componer interfaces o implementaciones.



¿Por qué Design Patterns?

Los patrones de diseño se han convertido en un objeto de cierta controversia en el mundo de la programación en los últimos tiempos, en gran parte debido a su "uso excesivo" percibido, lo que lleva a un código que puede ser más difícil de entender y administrar.

Es importante comprender que los Patrones de diseño nunca fueron diseñados para ser "pirateados" y aplicados de manera aleatoria, de una manera "única para todos" a su código. En última instancia, no hay sustituto para la capacidad genuina de resolución de problemas en la ingeniería de software.

Sin embargo, el hecho es que los patrones de diseño pueden ser increíblemente útiles si se utilizan en las situaciones adecuadas y por las razones correctas. Cuando se usan estratégicamente, pueden hacer que un programador sea significativamente más eficiente al permitirles evitar reinventar la rueda proverbial, en lugar de usar métodos refinados por otros ya. También proporcionan un lenguaje común útil para conceptualizar problemas repetidos y soluciones al discutir con otros o administrar código en equipos más grandes.

A continuación, explicaré los patrones de diseño más importantes que he usado y compartido con muchos colegas en los distintos proyectos que hemos participado.

Los patrones de diseño más importantes

1. Factory method

Una fábrica normal produce bienes; una fábrica de software produce objetos. Y no solo eso, lo hace sin especificar la clase exacta del objeto que se creará. Para lograr esto, los objetos se crean llamando a un método de fábrica en lugar de llamar a un constructor.

Por lo general, la creación de objetos en Java se realiza así:

Falcon objeto = new Falcon();
El problema con el enfoque anterior es que el código que usa el objeto de Falcon, de repente ahora se vuelve dependiente de la implementación concreta de Falcon. No hay nada de malo en usar new para crear objetos, pero viene con el bagaje de acoplar estrechamente nuestro código a la clase de implementación concreta, lo que ocasionalmente puede ser problemático.

2.Singleton

El patrón singleton se utiliza para limitar la creación de una clase a un solo objeto. Esto es beneficioso cuando se necesita un objeto (y solo uno) para coordinar acciones en todo el sistema. Hay varios ejemplos en dónde debería existir una única instancia de una clase, incluidos cachés, grupos de subprocesos y registros.

Es trivial iniciar un objeto de una clase, pero ¿cómo nos aseguramos de que solo se cree un objeto? La respuesta es hacer que el constructor sea "privado" para la clase que pretendemos definir como singleton. De esa forma, solo los miembros de la clase pueden acceder al constructor privado y nadie más.

Consideración importante: es posible subclasificar un singleton haciendo que el constructor esté protegido en lugar de privado. Esto podría ser adecuado en algunas circunstancias. Un enfoque adoptado en estos escenarios es crear un registro de singletons de las subclases y el método getInstance puede tomar un parámetro o usar una variable de entorno para devolver el singleton deseado. Luego, el registro mantiene una asignación de nombres de cadenas a objetos singleton, a los que se puede acceder según sea necesario.

3.Observer

Este patrón es una dependencia de uno a muchos entre objetos, de modo que cuando un objeto cambia de estado, se notifica a todos sus dependientes. Normalmente, esto se hace llamando a uno de sus métodos.
En aras de la simplicidad, piense en lo que sucede cuando sigue a alguien en Twitter. Básicamente, le estás pidiendo a Twitter que te envíe (el observador) actualizaciones de tweets de la persona (el sujeto) que seguiste. El patrón consta de dos actores, el observador que está interesado en las actualizaciones y el sujeto que genera las actualizaciones.

4.Strategy

El patrón de estrategia permite agrupar algoritmos relacionados bajo una abstracción, lo que permite cambiar un algoritmo o política por otro sin modificar el cliente. En lugar de implementar directamente un solo algoritmo, el código recibe instrucciones en tiempo de ejecución que especifican cuál del grupo de algoritmos ejecutar.

5.Adapter

Esto permite que las clases incompatibles trabajen juntas al convertir la interfaz de una clase en otra. Piense en ello como una especie de traductor: cuando dos jefes de estado que no hablan un idioma común se encuentran, generalmente un intérprete se sienta entre los dos y traduce la conversación, lo que permite la comunicación.

Si tienes dos aplicaciones, una de las cuales arroja la salida como XML y la otra requiere una entrada JSON, entonces necesitará un adaptador entre las dos para que funcionen sin problemas.

6.Builder

Como su nombre lo indica, se utiliza un patrón de construcción para construir objetos. A veces, los objetos que creamos pueden ser complejos, estar formados por varios subobjetos o requerir un elaborado proceso de construcción. El ejercicio de crear tipos complejos se puede simplificar utilizando el patrón de construcción. Un objeto compuesto o agregado es lo que generalmente construye un constructor.
Consideración clave: el patrón Builder puede parecer similar al patrón de "fábrica abstracta", pero una diferencia es que el patrón Builder crea un objeto paso a paso, mientras que el patrón de fábrica abstracto devuelve el objeto de una vez.

7.State

El patrón State encapsula los diversos estados en los que puede estar una máquina y permite que un objeto altere su comportamiento cuando cambia su estado interno. La máquina o el contexto, como se le llama en lenguaje de patrones, puede tener acciones que lo impulsen a diferentes estados. Sin el uso del patrón, el código se vuelve inflexible y está plagado de condicionales if-else.
    */

