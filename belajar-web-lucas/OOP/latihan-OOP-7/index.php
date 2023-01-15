<?php  
require_once "Produk.php";


$obj = new ProdukBuku("Cara cepat jadi kaya",70000, "", 156 ,"Putih");
$obj2 = new ProdukBuku("Rahasia sukses",90000, "", 130 ,"Kuning");
$dis = new PrettyDisplay; 
$dis -> addData($obj); 
$dis -> addData($obj2); 
$dis -> display();
// echo $obj -> display(); 
// tidak keren  


?>