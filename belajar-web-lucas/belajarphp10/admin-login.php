<?php 
require "assets/func/all.php";
session_start();
	if(isset($_POST["user"]) && isset($_POST["pass"]))
	{
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$q = "SELECT * FROM admin WHERE users = '$user'";
		$data = $connect -> query($q);
		if( $data -> num_rows > 0 ) {
			$d = $data -> fetch_object();
			if($pass === $d -> pass){
				echo "OK";

			} 
		}    
	}		
?>