<!DOCTYPE html>
<html>

<body>

  <?php

  include 'intro.php'; ?>

  <h2>2. Attributes</h2>
  <pre>
  /*
   * @Route()
   **/
  // un atributo
  #[\Attribute]
  class TestAttribute
  {
    public function __construct( public string $testArgument)
    {}
  }

  // aplicamos el atributo
  #[TestAttribute('Hello World')]
  class Myclass 
  { }

  // Obtener el valor del atributo
  $reflection = new \ReflectionClass(MyClass::class);
  $classAttributes = $reflection->getAttributes();

  var_dump($classAttributes[0]->newInstance()->testArgument);
  </pre>
  <?php

  /*
   * @Route()
   **/
  // un atributo
  #[\Attribute]
  class TestAttribute
  {
    public function __construct( public string $testArgument)
    {}
  }

  // aplicamos el atributo
  #[TestAttribute('Hello World')]
  class Myclass 
  {}

  // Obtener el valor del atributo
  $reflection = new \ReflectionClass(MyClass::class);
  $classAttributes = $reflection->getAttributes();
  var_dump($classAttributes[0]->newInstance()->testArgument);

  ?>
</body>

</html>