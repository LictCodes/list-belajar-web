<?php  
// try {
$rqest = $_SERVER["REQUEST_METHOD"];
$addQuery = null ;

if(strtolower($rqest) === "post"){
	$addQuery = htmlspecialchars($_POST["data"]);
}
// echo $addQuery;

$conn = mysqli_connect(
	"localhost",
	"root",
	"",
	"warga_cilacap"
);


  // (mysqli_connect_errno())
	if(mysqli_connect_errno()){
		?> 
		<h1> Upss Error bruh!!</h1>
		<?php
		// echo("Failed connet to database ${mysqli_connect_error()}");
		exit();
	}

$db_warga = mysqli_query(
	$conn,
	"SELECT * FROM warga"
);
$dbase = [];
while( $get_db = mysqli_fetch_assoc($db_warga)){
	array_push($dbase, $get_db);
}
// print_r($db_);

?>


<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR DATABASE MYSQL => (insert)</title>
	
</head>
<body>

	<?= $addQuery ?: "" ?>
	<h1 >   list of warga cilacap  </h1>
	<table class="tengah">
		<tr>
			<th>Nama</th>
			<th>Umur</th>
		</tr>
		<?php 
		foreach($dbase as $data) {
		?>
		 <tr>
			<td><?= $data["nama"] ?></td>
			<td><?= $data["umur"] ?></td>
		</tr>
		<?php  
		 } 
		?>
	</table>
	<form method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
		<input type="text" name="data">
		<button type="submit" >Add data</button>
	</form>

</body>
</html>
<?php  
mysqli_close($conn);
?>