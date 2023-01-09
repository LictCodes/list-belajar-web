<?php  
$conn = mysqli_connect(
	"localhost",
	"root",
	"",
	"warga_cilacap"
);
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
	<title>BELAJAR DATABASE MYSQL</title>
	<style type="text/css">
		*{
			background-color: black;
			margin: auto;
		}
		h1{
			color: white;
			text-align: center;
		}
		.tengah{
			margin-top: 50px;
 			vertical-align: middle;

		}
		table, th, td {
 			border-radius: 30px;
			text-align: center;
 			border: 4px solid white;
 			font-family: "Courier New";
 			color: white;
 			width: 50% ;

		}
	</style>
</head>
<body>
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
</body>
</html>