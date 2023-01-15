<?php  
// Connect DataBase 
spl_autoload_register(function ($c){
	require_once "DBase/" . $c . ".php";
});

?>