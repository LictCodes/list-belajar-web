<?php  
require_once "produk.php";
// produk 1
$minyak =  new ProdukSembako("sawit", 15000, "", "16-07-2025" );
print $minyak -> display(); 

// produk 2
$buku = new ProdukBuku("Buku Rahasia Kaya",15000 , "", 100, "kuning");
print $buku -> display();
?>