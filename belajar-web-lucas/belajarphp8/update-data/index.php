<?php  
require "./update-data.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update data</title>
	<style type="text/css">
		form {
			margin : 15px;
		}
	</style>
</head>
<body>
	<?php if(isset($_GET["err"])){ ?> 
		<?= htmlspecialchars($_GET["err"]) ?>
	<?php } ?> 
	<?php $result = mysqli_query($conn , "SELECT * FROM warga WHERE id = '$id' ");
	while($d = mysqli_fetch_assoc($result)) { ?>
	<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
		<input type="hidden" name="id" value="<?= $d['id'] ?>">
		<label for="fm">
		<ul id="fm">
			<li>Nama : </li>
			<li>
				<input type="text" name="nama" value="<?= $d['nama'] ?>">
			</li>
			<li>Umur : </li>
			<li>
				<input type="text" name="umur" value="<?= $d['umur'] ?>">
			</li>
		</ul>
		</label>
		<button>UPDATE DATA</button>
	</form>
	<?php } ?>
</body>
</html>