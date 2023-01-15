<?php 
require_once "assets/App/init.php";
$tes = new User("localhost","root","","school");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<!-- Jquery -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src="assets/js/heart.js"></script>
</head>
<body>
	<div class="bg_heart">
		<h1 class="data">
		</h1>
		<div class="container">
			<form class="form card" method="POST">
				<div class="card_header">
					<svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 0h24v24H0z" fill="none"></path>
						<path d="M4 15h2v5h12V4H6v5H4V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6zm6-4V8l5 4-5 4v-3H2v-2h8z" fill="currentColor"></path>
					</svg>
					<h1 class="form_heading">Sign in</h1>
				</div>
				<div class="field">
					<label for="username">Username</label>
					<input id="username" placeholder="Username" type="text" name="user" class="input">
				</div>
				<div class="field">
					<label for="password">Password</label>
					<input id="password" placeholder="Password" type="password" name="pass" class="input">
				</div>
				<div class="alert"></div>
				<div class="field">
					<button class="button">Login</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/form-handl.js"></script>
</body>
</html>