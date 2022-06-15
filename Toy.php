<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
  public $target_age;
  public $material;

  function __construct($_name, $_inventory_code, $_target_animal, $_price, $_target_age, $_material ) {
    parent::__construct($_name, $_inventory_code, $_target_animal, $_price );
    $this->target_age = $_target_age;
    $this->material = $_material;
}
public function printInfo() {
  return "$this->name | for: $this->target_animal | from:$this->target_age year(s) | Material: $this->material | € $this->price";
}
}



?>