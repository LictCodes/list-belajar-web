<?php  
$err = "";
require "assets/func/all.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles"/>
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">
	<script type="text/javascript" src="assets/js/lgn.js"></script>
</head>
<body>
	<div class='box'>
  <div class='wave -one'></div>
  <div class='wave -two'></div>
  <div class='wave -three'></div>
</div>

<div class="container">
	<div class="login">
		<div class="lgn-header">
			<h1>Login</h1>
		</div>
		<div class="lgn-body">
			<form class="fm" method="POST">
				<label for="user">
					Username
					<input type="text" name="user" id="user">
				</label>
				<label for="pass">
					Password
					<input type="password" name="pass" id="pass">
				</label>
				<button id="kirim">Login</button>
			</form>
		<p class="respon"></p>
		</div>
		<div class="lgn-footer text-center">
			<a href="#">Halaman utama </a>
		</div>
	</div>
	<!-- <p class="alert"></p> -->
</div>
</body>
</html>


