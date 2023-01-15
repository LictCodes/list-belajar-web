<?php   
require_once "toko-anjing.php";

$toko = new TokoAnjing();
// $toko -> HargaBulldog = 20000000; 
print $toko -> getPrice();
?>