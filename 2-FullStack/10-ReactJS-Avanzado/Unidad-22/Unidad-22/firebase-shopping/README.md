# Explorando las capacidades de Firebase
En las lecciones 19, 20, 21, 22, 23, 27 y 28 exploraremos al máximo las posibilidades que tenemos gracias a Firebase.

## Lección 19 - Introducción a Firebase
1. ¿Qué es Firebase?
2. Servicios que ofrece Firebase
3. Creando nuestra primera aplicación en Firebase
4. Integrando la aplicación en ReactJS
### Tarea Lección 19
Cambia el nombre privado (Nombre del Proyecto) y el nombre público del proyecto

## Lección 20 - Autenticación con Firebase
1. ¿Cuáles son los distintos tipos de autenticación que tenemos con Firebase?
2. Configuración de Firebase Auth dentro de nuestra aplicación
3. Creación de login con Google y con email
4. Creación de registro
5. Gestión de sesiones con Firebase
### Tarea Lección 20
Implementa el login a través de número de teléfono

## Lección 21 - Notificaciones Push con Firebase
1. ¿Qué son las notificaciones push?
2. Cómo configurar las notificaciones push dentro de Firebase
3. Configuración de nuestro proyecto de ReactJS para recepción de notificaciones de Firebase
4. Envío de notificaciones a nuestra aplicación ReactJS a través de Firebase
### Tarea Lección 21
¡Ha habido un problema y nos han hackeado las notificaciones push! No te preocupes, **sustituye la clave del servidor de Cloud Messaging por una nueva**, y solucionado ;)

## Lección 22 - Base de datos FireStore de Firebase
1. ¿Qué es FireStore?
2. Creación de nuestra primera Base de datos con Firestore
3. Características principales de Firestore
4. Colecciones y documentos dentro de nuestra base de datos
5. Índices de documentos en FireStore
6. Control de acceso a datos mediante reglas
7. CRUD (Create, Read, Update, Delete) desde nuestra aplicación de ReactJS
### Tarea Lección 22
Cambia las reglas de nuestra base de datos para que cumplan lo siguiente:
- Sólo puedes **crear tareas si estás registrado**
- Sólo puedes **eliminar tareas si estás registrado**
- Puedes **actualizar tareas tanto si estás registrado como si no lo estás**
- Puedes **leer tareas tanto si estás registrado como si no lo estás**

## Lección 23 - Hosting en Firebase
1. ¿Cómo funciona el hosting en Firebase?
2. Instalaciones necesarias dentro de nuestra aplicación de ReactJS
3. Vinculación con un repositorio (privado) de git
4. Despliegue en Firebase "manual" a través de CLI
5. Automatización de despliegue con Github Actions
6. Buenas prácticas en despliegue (Continuous Integration)
### Tarea Lección 23
1. Crea un nuevo componente en nuestro proyecto
2. Utiliza git para crear un nuevo commit
3. Realiza el push de esta nueva versión
4. Verifica que el nuevo proyecto se ha desplegado correctamente

## Lección 27 - Testing End To End con Cypress
1. ¿Qué es Cypress?
2. Ventajas principales
3. Instalación y puesta en marcha
4. Analizando los ejemplos nativos de Cypress
5. ¿Cómo ejecutar Cypress por comandos?
6. Fundamentos de Cypress
7. Configuraciones principales
8. Metodología BDD
9. Creación de escenarios con Cypress
10. Automatización de ejecución de Cypress
### Tarea Lección 27
Crea un nuevo escenario en Cypress que testee de forma automática lo siguiente:
- Introducir una nueva tarea
- Actualizar una tarea existente
- Eliminar una tarea
(Extra: Revisa cómo se comportan los datos en FireStore)

## Lección 28 - Automatización de tests End to End en nuestro proyecto final
1. Utilizamos Cypress para automatizar el testing end to end en nuestro proyecto
2. Realizamos diferentes casos de test para verificar que nuestra aplicación funciona de principio a fin
3. Ejecución automatizada de casos de test
### Tarea Lección 28
1. Crea un componente para cambiar el modo de nuestra aplicación (light mode <-> dark mode) (Pista: Revisa la lección 17)
2. Crea un nuevo escenario en Cypress que testee el funcionamiento de este nuevo componente
