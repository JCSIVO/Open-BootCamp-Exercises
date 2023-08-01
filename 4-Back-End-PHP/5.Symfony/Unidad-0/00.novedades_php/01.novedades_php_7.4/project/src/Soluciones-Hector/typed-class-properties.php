<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>2. Typed class properties</h2>
  <p>A partir de <strong>PHP 7.4</strong> podremos tipar las propiedades de nuestras clases:</p>

  <pre>
    class ContactInfo
    {
        public string $type;
        public ?int $phone;
    }

    class User
    {
        public string $name;
        public ?int $age;
        public ContactInfo $contactInfo;
    }
  </pre>
  <?php
  class ContactInfo
  {
    public string $type;
    public ?int $phone;
  }

  class User
  {
    public string $name;
    public ?int $age;
    public ContactInfo $contactInfo;
  }
  ?>
</body>

</html>