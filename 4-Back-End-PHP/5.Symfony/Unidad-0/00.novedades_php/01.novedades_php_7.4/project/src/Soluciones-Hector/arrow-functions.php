<!DOCTYPE html>
<html>

<body>

  <?php include 'intro.php'; ?>

  <h2>1. Funciones flecha</h2>
  <p>Las <strong>arrow functions</strong> llegan por fin a PHP algo que seguro agradecéis aquellos que también programéis en Javascript. Estas funciones, también conocidas como <strong>short closures</strong> permiten escribir funciones cortas de una forma menos <strong>verbosa</strong>.</p>
  <?php
  class Product
  {
    public $name;
    public $price;

    function getName()
    {
      return $this->name;
    }

    function setName($name)
    {
      $this->name = $name;
    }

    function getPrice()
    {
      return $this->price;
    }

    function setPrice($price)
    {
      $this->price = $price;
    }
  }
  /* creamos una instancia */
  $product = new Product();

  $product->setName("frenault");
  $product->setPrice(30.40);

  $products[] = $product;

  $product->setName("faudi");
  $product->setPrice(40.40);

  $products[] = $product;

  ?>
  <h4>ANTES</h4>
  <?php
  // antes 
  $prices = array_map(function (Product $product) {
    return $product->getPrice();
  }, $products);
  var_dump($prices);
  ?>
  <h4>AHORA</h4>
  <?php
  // ahora 
  $prices = array_map(fn (Product $product): float => $product->getPrice(), $products);
  var_dump($prices);
  ?>
  <h4>OTRO EJEMPLO</h4>
  <?php
  // otro ejemplo
  $multiplier = 5;
  $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  var_dump(array_map(fn ($x) => $x * $multiplier, $numbers));
