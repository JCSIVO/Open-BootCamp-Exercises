<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>


  <h2>5. Operador spread para arrays</h2>

  <pre>
  $foo = [1, 2, 3];
  $bar = ['a', 'b', 'c'];

  $result = [0, ...$foo, ...$bar, 'd'];

  var_dump($result);
  </pre>
  <?php
  $foo = [1, 2, 3];
  $bar = ['a', 'b', 'c'];

  $result = [0, ...$foo, ...$bar, 'd'];

  var_dump($result);

  ?>

  <blockquote>
    <p>☕ <em>Eso sí, de momento <strong>sólo es posible usarlo con arrays que tengan claves numéricas</strong> por lo que habrá que esperar a una siguiente versión para emplear este operador con arrays asociativos.</em></p>
  </blockquote>

</body>

</html>