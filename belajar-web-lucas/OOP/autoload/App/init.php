<?php  
// call all object produk : 
spl_autoload_register(function ($c) {
	require_once "Produk/". $c . ".php";
});

?>