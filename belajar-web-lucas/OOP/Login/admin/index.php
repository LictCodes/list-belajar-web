<?php  
require_once "../assets/App/init.php";
session_start();
	if(isset($_POST["users"]) && isset($_POST["passw"])){
		$user = $_POST["users"];
		$pass = $_POST["passw"];
		$admin = new Admin("localhost","root","","school") or die("Gagal Connect!!!");
		if (in_array($user, $admin -> usernameAdmin())) {
			$offset = array_search($user,$admin -> usernameAdmin());
			$passAdmin = $admin -> passwordAdmin();
			if ($pass === $passAdmin[$offset]) {
			echo "Succes";
			$_SESSION["Login"] = "true";
			$_SESSION["Admin"] = $user;
			$_SESSION["pass"] = $pass;
			}
			else {
				echo "Username Tidak Di Temukan";	
			}
		}
		else {
			echo "Username Tidak Di Temukan";
		}
	}

?>
