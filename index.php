<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/CreditCard.php";

$rubber_bone = new Toy("Rubber Bone", "T458H32", "dog", "3.90", "1+", "Rubber");
$catnip_ball = new Toy("Catnip Ball", "T458H68", "cat", "4.90", "1+", "Fabric");

$tuna_can = new Food("Tuna Can", "F459H67", "cat", "2.50", false, false);
$rice_and_veg = new Food("Rice and Vegetables", "F65H456", "dog", "4.50", true, true);

$tuna_can->setSupplier("Monge", "via nanana 10 Roma", "PI 456784321");

var_dump($tuna_can, $rice_and_veg, $rubber_bone, $catnip_ball);

$lara = new User();
$lara->addProductToCart($catnip_ball);
$lara->addProductToCart($tuna_can);
$lara->addProductToCart($rice_and_veg);

$lara->register("lara", "lara@gmail.com");
$lara->setPaymentMethod(new CreditCard(1962145598670988, "04/21", 655));

var_dump($lara);

try {
  $lara->pay();
} catch (Exception $e) {
  var_dump($e->getMessage());
  echo "Carta non valida";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>carrello</h2>
<ul>
    <?php foreach ($lara->cart as $cartProduct) { ?>
        <li><?php echo $cartProduct->printInfo(); ?></li>
    <?php } ?>
</ul>
<h4>Totale: € <?php echo $lara->getTotal(); ?></h4>

  
</body>
</html>