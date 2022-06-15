<?php

trait Supplier {
    public $supplier_name;
    public $supplier_address;
    public $supplier_vat;

    public function setSupplier($_supplier_name, $_supplier_address, $_supplier_vat) {
      $this->supplier_name = $_supplier_name;
      $this->supplier_address = $_supplier_address;
      $this->supplier_vat = $_supplier_vat;
  }
}

?>