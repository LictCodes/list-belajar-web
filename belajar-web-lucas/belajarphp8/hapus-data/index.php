<?php  
// $link = $_SERVER["PHP_SELF"];
// if(explode("/",$link)[4] == "") ;
function redi($link ="./"){?> 

	<script type="text/javascript">
		window.location.href =  "<?= $link ?>"
	</script>
<?php 
}
$check = isset($_GET["id"]) ?: false; 
if($check){
	$id = htmlspecialchars($_GET["id"]);
	$conn= mysqli_connect("localhost","root","","warga_cilacap");
	mysqli_query($conn,"DELETE FROM warga WHERE id='$id'");
	redi("../");
}  
?>










