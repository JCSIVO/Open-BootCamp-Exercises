<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>6. Preloading</h2>
  <p>Ésta es probablemente la novedad que más bombo ha recibido desde que fue anunciada pese a ser una característica de bajo nivel. Sin embargo su inclusión traerá consigo mejoras de rendimiento sustanciales.</p>
  <p>A modo de resumen esta nueva característica permite al servidor cargar los archivos PHP en memoria al principio de modo que estén permanentemente disponibles para todas las <strong>requests</strong> posteriores a la carga. Evidentemente esto supone una mejora muy significativa en la velocidad a la que se ejecutarán las peticiones pero que sin embargo nos obligará a reiniciar el servidor cada vez que modifiquemos el código fuente.</p>
  <p>Estarás pensando que esta característica es muy similar a <strong>OPCache</strong> sin embargo no es exactamente lo mismo. <strong>OPCache</strong> lo que hace escoger los archivos fuente de PHP y compilarlo a <em>&quot;opcodes&quot;</em> los cuales son almacenados en disco. Estos <em>&quot;opcodes&quot;</em> son representaciones a bajo nivel del código de tu aplicación que pueden ser interpretados de forma más rápida en tiempo de ejecución puesto que es como si ya estuvieran en <em>&quot;lenguaje máquina&quot;</em> por lo que no es necesario que PHP los <em>&quot;traduzca&quot;</em>.</p>
  <p>Además, los archivos generados de este modo por <strong>OPCache</strong> no tienen conocimiento de otros archivos. Es decir, si la clase <code>Bar</code> extiende de <code>Foo</code>, en tiempo de ejecución será necesario <em>&quot;linkarlas&quot;</em>.</p>
  <p>Finalmente, <strong>OpCache</strong> tiene un mecanismo que comprueba si ha habido modificaciones en los archivos fuentes de cara a invalidar la cache en el caso de detectar cambios.</p>
  <p>Es aquí donde se encuentra la principal diferencia con <strong>Preloading de PHP 7.4</strong>. Esta característica no sólo compila los archivos a <strong>opcode</strong> sino que también linka las clases relacionadas, <strong>traits</strong> e interfaces y lo almacena en memoria de modo que cuando llega una petición ya lo tiene disponible.</p>

</body>

</html>