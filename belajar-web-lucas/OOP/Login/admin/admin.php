<?php	
session_start();
if(!isset($_SESSION["login"]) && !isset($_SESSION["pass"])){
	?>
	<h1>Anda belom login</h1>
	<script type="text/javascript">
		setTimeout(() => {
		window.location.href = "../";
	}, 1000)
	</script>
	<?php
	exit;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="logOut.js">
		
	</script>
</head>
<body>
	<h1>Welcome <?= $_SESSION['Admin'] ?></h1>	
	<p>ini adalah halaman admin </p> 
	<a class="logOut" href="">Log out</a>
</body>
</html>