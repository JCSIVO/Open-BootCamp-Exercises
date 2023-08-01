<!DOCTYPE html>
<html>

<body>

  <?php
  include 'intro.php'; ?>
  <h2>5. Class objects</h2>
  <p>Otro <strong>sintactic sugar</strong> que nos trae <strong>PHP8</strong> es la posibilidad de emplear <code>::class</code> sobre objetos, de modo que ya no sea necesario emplear la función <code>get_class</code>:</p>
  <pre>
  class User
  {
    public function __construct(
      public string $name = '',
      public string $email = '',
      public int $age = 0
    ) {
    }
  }

  $user = new User('Pepe', 'info@botillo.com', 34);
  // antes
  $class = get_class($user);
  var_dump($class);
  // ahora 
  var_dump($user::class);
  </pre>
  <?php
  class User
  {
    public function __construct(
      public string $name = '',
      public string $email = '',
      public int $age = 0
    ) {
    }
  }

  $user = new User('Pepe', 'info@botillo.com', 34);
  // antes
  $class = get_class($user);
  var_dump($class);
  // ahora 
  var_dump($user::class);
  ?>