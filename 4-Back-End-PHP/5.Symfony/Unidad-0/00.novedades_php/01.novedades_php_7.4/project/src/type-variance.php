<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>3. Type variance mejorada en el retorno de funciones</h2>
  <p>Con la llegada de <strong>PHP 7.4</strong> se ha introducido una mejora en los tipos de retorno de las funciones, permitiéndonos realizar lo siguiente:</p>
  <pre>
  class Father
  {

  }
  class Child extends Father{

  };

  class Foo{
      public function covariant(): Father
      {
        return new Father();
      }
  }

  class Bar extends Foo{
      public function covariant(): Child{
          return new Child();
      }
  }
  </pre>
  <?php
  class Father
  {

  }
  class Child extends Father{

  };

  class Foo{
      public function covariant(): Father
      {
        return new Father();
      }
  }

  class Bar extends Foo{
      public function covariant(): Child{
          return new Child();
      }
  }