<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.L'e-commerce vende prodotti per gli animali. :catrainbow: :cool-doge:
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti. :carello_della_spesa:Il pagamento avviene con la carta di credito, che non deve essere scaduta.BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php 

class Product {
  public $name;
  public $inventory_code;
  public $target_animal;
  public $price;
  public $available = true;


function __construct($_name, $_inventory_code, $_target_animal, $_price) {

  $this->name = $_name;
  $this->inventory_code = $_inventory_code;
  $this->target_animal = $_target_animal;
  $this->price = $_price;
}
public function printInfo() {
  return "$this->name $this->target_animal € $this->price";
}
}
?>