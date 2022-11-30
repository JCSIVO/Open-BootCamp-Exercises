<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>3. Constructor Property Promotion</h2>

  <p><strong>PHP 8</strong> también trae lo que se conocen como <strong>azucarillos sintáticos</strong> que nos permiten simplificar el código que escribimos por versiones más cortas.</p>
  <p>Uno de estos nuevos <strong>sintactic sugars</strong> es el <strong>Constructor Property Promotion</strong> que nos permite pasar de construir nuestros DTO’s o <strong>value objects</strong> de esta forma:</p>
  <pre>
  class User
  {
      public string $name;
      public string $email;
      public int $age;

      public function __construct(string $name ='',string $email ='', int $age ='0')
      {
          $this->name = $name;
          $this->email = $email;
          $this->age = $age;
      }
  }

  // ahora
  class NewUser
  {
      public function __construct(
          public string $name ='',
          public string $email ='', 
          public int $age ='0'
          )
      {}
  }


  </pre>
  <?php
  // antes
  class User
  {
    public string $name;
    public string $email;
    public int $age;

    public function __construct(string $name = '', string $email = '', int $age = 0)
    {
      $this->name = $name;
      $this->email = $email;
      $this->age = $age;
    }
  }

  // ahora
  class NewUser
  {
    public function __construct(
      public string $name = '',
      public string $email = '',
      public int $age = 0
    ) {
    }
  }

  ?>