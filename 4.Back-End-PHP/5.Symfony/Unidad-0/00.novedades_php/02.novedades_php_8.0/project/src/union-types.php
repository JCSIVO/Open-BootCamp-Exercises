<!DOCTYPE html>
<html>

<body>

  <?php

  use phpDocumentor\Reflection\Types\Integer;

  include 'intro.php'; ?>

  <h2>1. Union Types</h2>

  <pre>
  function unionTypesFunction(String|Integer $foo): String|Integer
  {
    return $foo;
  }
  var_dump(unionTypesFunction(10));
  var_dump(unionTypesFunction('Hello World'));
  </pre>
  <?php
  function unionTypesFunction(String|Integer $foo): String|Integer
  {
    return $foo;
  }
  var_dump(unionTypesFunction(10));
  var_dump(unionTypesFunction('Hello World'));
  ?>

</body>

</html>