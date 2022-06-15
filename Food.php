<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
  public $organic;
  public $vegan;

  function __construct($_name, $_inventory_code, $_target_animal, $_price, $_organic, $_vegan ) {
    parent::__construct($_name, $_inventory_code, $_target_animal, $_price );
    $this->organic = $_organic;
    $this->vegan = $_vegan;
}
public function printInfo() {
  return "$this->name | for: $this->target_animal | organic: $this->organic | vegan: $this->vegan | € $this->price";
}
}



?>