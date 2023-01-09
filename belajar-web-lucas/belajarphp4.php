<?php  
function randomString( $len= 10 )
{
	$char = "1234567890abcdefghijklmnoqrstupwyz"; 
	$indexChar = count($char) - 1 ;
	$random = "";  
	for ($i=0; $i < $len ; $i++) { 
		$random .= $char[rand(rand($i,$len),$indexChar)];
	}
	return $random;
}

$kelas_rpl = [
	[
		"nama" => "Lucas Renanda",
		"kelas" => "10",
		"id" => randomString($len = 6),
		"rank" => 1,
	],
	[
		"nama" => "BallisticFury",
		"kelas" => "10",
		"id" => randomString($len = 6),
		"rank" => 3,
	],
	[
		"nama" => "Centurion Sherman",
		"kelas" => "10",
		"id" => randomString($len = 6),
		"rank" => 2,
	]

];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Murid Kelas Rpl</title>
</head>
<body>
	<h3>NAMA-NAMA : </h3>
	<?php
	foreach ($kelas_rpl as $mrd) { 
	?>
	 	
	 	<a href="belajarphp5.php?nama=<?= $mrd['nama']; ?>&rank=<?= $mrd['rank']; ?>">	
	 		<li><?= $mrd["nama"] ?></li>
	 	</a>

	<?php } ?>

</body>
</html>