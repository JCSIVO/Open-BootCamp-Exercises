<!DOCTYPE html>
<html>

<body>

  <?php
  include 'intro.php'; ?>
  <h2>7. Stringable</h2>
  <p><strong>PHP 8</strong> añade la interfaz <code>Stringable</code> para que podamos tipar aquellos argumentos o valores de retorno que son o bien un string o bien implementan el método <code>__toString()</code>.</p>
  <p>Además, a partir de ahora cualquier clase que declare el método <code>__toString()</code> implementará automáticamente esta interfaz sin necesidad de que lo especifiquemos a mano.</p>
  <pre>
  class User
  {
    public function __construct(
      public string $name = '',
      public string $email = '',
      public int $age = 0
    ) {
    }

    public function __toString():string
    {
      return $this->name.' - '.$this->email;
    }
  }

  $user = new User('Pepe', 'info@botillo.com', 34);

  function printMessage(Stringable $stringable)
  {
    return $stringable;
  }

  printMessage($user);
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

    public function __toString():string
    {
      return $this->name.' - '.$this->email;
    }
  }

  $user = new User('Pepe', 'info@botillo.com', 34);

  function printMessage(Stringable $stringable)
  {
    return $stringable;
  }

  printMessage($user);