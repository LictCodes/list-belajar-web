<?php   
function addData(mysqli $conn, ...$data) {
	return $conn -> query("INSERT INTO warga VALUES (NULL, '$data[0]','$data[1]')");
}



?>