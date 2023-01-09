<?php 
$contoh_array = [
	"lucas",
	"renanda",
	"<br>"
];

echo "ini adalah contoh array :";
print_r($contoh_array);
echo "<br>";
$contoh_array_map = [
	"first_name" => "LUCAS",
	"middle_name" => "RENANDA",
	"last_name" => ""
];
foreach($contoh_array_map as $key => $value){
	echo "key : $key => ";
	echo "value : $value";
	echo "<br>";
	sleep(1);

}































?>