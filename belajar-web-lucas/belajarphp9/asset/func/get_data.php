<?php

function get_data(mysqli $conn){
	return $conn->query("SELECT * FROM warga");
}


?>