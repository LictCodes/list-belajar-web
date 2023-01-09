<?php  
require "./Add-data.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add data</title>
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
	<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
		<label for="fm">
		<ul id="fm">
			<li>Nama : </li>
			<li>
				<input type="text" name="nama">
			</li>
			<li>Umur : </li>
			<li>
				<input type="text" name="umur">
			</li>
		</ul>
		</label>
		<button>ADD DATA</button>
	</form>
</body>
</html>