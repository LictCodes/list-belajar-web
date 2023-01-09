<?php  
$conToDatabase = mysqli_connect("localhost","root","","warga_cilacap");
if(mysqli_connect_errno()){
	?>
	<h1>Error bruh..</h1>
	<p>please contact developer</p>
	<?php
	exit();
}
$warga = [];
$dbWarga = mysqli_query(
	$conToDatabase,
	"SELECT * FROM warga"
);
while ($getData = mysqli_fetch_assoc($dbWarga)) {
	array_push($warga, $getData);
}
// var_dump($warga)
?>