<?php
require_once __DIR__ . "/Product.php";

class Cosmetics extends Product{
  public $antifleas;

  function __construct($_name, $_inventory_code, $_target_animal, $_price, $_antifleas = true) {
    parent::__construct($_name, $_inventory_code, $_target_animal, $_price);
    $this->antifleas = $_antifleas;
  }
}
?>