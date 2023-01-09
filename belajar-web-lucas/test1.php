<?php

function sum(array $sum ){
$amount = null;
foreach($sum as $s){
	$amount += $s ;

}
return $amount;
}
if(isset($_POST["number1"])){
 	if(isset($_POST["number2"])){
 		$number1 = $_POST["number1"];
		$number2 = $_POST["number2"];
		echo sum($sum = [$number1 , $number2]);
	} else {
		echo "data dua tidak ada";
	}
} else{
	echo "data nomor satu tidak ada";
}

?>