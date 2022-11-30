<!DOCTYPE html>
<html>

<body>

  <?php
  include 'intro.php'; ?>
  <h2>4. Mixed Types</h2>
  <p>Con PHP 8 ya podremos tipar mediante <code>mixed</code> argumentos, propiedades y valores de retorno para representar varios de estos valores:</p>
  <ul>
    <li><code>array</code></li>
    <li><code>bool</code></li>
    <li><code>callable</code></li>
    <li><code>int</code></li>
    <li><code>float</code></li>
    <li><code>null</code></li>
    <li><code>object</code></li>
    <li><code>resource</code></li>
    <li><code>string</code></li>
  </ul>
  <pre>
  function foo(mixed $foo): mixed
  {
      return $foo;
  }

  var_dump(foo(10));
  var_dump(foo('Hello World'));
  </pre>
  <?php
  function foo(mixed $foo): mixed
  {
      return $foo;
  }

  var_dump(foo(10));
  var_dump(foo('Hello World'));
  ?>