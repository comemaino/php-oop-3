<?php
class CreditCard  {
  public $card_number;
  public $expire_date;
  public $cvc;

  function __construct($_card_number, $_expire_date, $_cvc) {
    $this->card_number = $_card_number;
    $this->expire_date = $_expire_date;
    $this->cvc = $_cvc;

  }

  public function isValid() {
    $today = new \DateTime('midnight');
    $expire_datetime = \Datetime::createFromFormat("m/y", $this->expire_date);
    return($today < $expire_datetime);
  }
}
?>