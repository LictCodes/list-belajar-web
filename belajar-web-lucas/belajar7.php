<?php
function sum(...$value){
	$amount = null;
	foreach($value as $v ){
		$amount += $v;
	}
	return $amount;
}
function kalikan(...$value){
		$amount = 1;
	foreach($value as $v ){
		$amount *= $v;
	}
	return $amount;
}


if(isset($_POST["number1"])){
 	if($_POST["number2"] <> ""){
 		$number1 = $_POST["number1"];
		$number2 = $_POST["number2"];
		echo kalikan($number1,$number2);
	} else {
		echo "data dua tidak ada";
	}
} else{
	echo "data nomor satu tidak ada";
}

?>