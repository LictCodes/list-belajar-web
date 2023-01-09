<?php 
require "asset/func/index.php";

if (isset($_GET["ID"])) {
	$id = $_GET["ID"];
	$q = "DELETE FROM warga WHERE id=$id";
	$conn -> query($q);
}
?> 