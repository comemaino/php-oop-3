<?php 

class User {
  public $name;
  public $email;
  public $cart = [];
  public $payment_method;

// function __construct($_name, $_email, $_cart, $_payment_method) {

//   $this->name = $_name;
//   $this->email = $_email;
//   $this->cart = $_cart;
//   $this->payment_method = $_payment_method;
// }
public function register($_name, $_email) {
  $this->name = $_name;
  $this->email = $_email;
}

public function isRegistered() {
  if ($this->email && $this->name) {
      return true;
  }
  return false;
}
  
function getTotal() {
  $total_price = 0;
        foreach($this->cart as $item) {
          $total_price += $item->price;
        }
        if($this->isRegistered()) {
          $total_price = $total_price * 0.8;
        }
        // if($this->email && $this->name) {
        //   $total_price = $total_price * 0.8;
        // }
         return $total_price;
}

public function addProductToCart($_product) {
  if ($_product->available) {
      $this->cart[] = $_product;
      return true;
  } else {
      return false;
  }
}

public function setPaymentMethod($_payment_method) {
  $this->payment_method = $_payment_method;
}

public function pay() {
  if($this->payment_method->isValid()) {
    return "hai pagato";
  } else {
    return "errore";
  }
}
}
?>