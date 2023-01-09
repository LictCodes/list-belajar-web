<?php  
function redi($link = "./" ){
?>
	<script type="text/javascript">
		window.location.href = "./<?= $link ?>"
	</script>
<?php
}
// redi();
function tambah($dbConnect , ...$data ){
	 mysqli_query($dbConnect, "
	 	INSERT INTO warga VALUES 
	 	(NULL, '$data[0]' , '$data[1]')
	 ") ; 
}
$link = $_SERVER["PHP_SELF"];
if(explode("/",$link)[4] === "Add-data.php"){
	die("Hayoo mau ngapain");
}
$err = "";
$conn = mysqli_connect("localhost","root","","warga_cilacap");
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	$datas = [ 
		isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]): false,
		isset($_POST["umur"]) ? htmlspecialchars($_POST["umur"]): false 
	]; 

	if($datas[0]  && $datas[1])
	{
		tambah($conn, ...$datas);
		if(mysqli_affected_rows($conn) > 0){?> 
			<script type="text/javascript"> alert("data sukses terkirim")</script>
		<?php
		} else {
			$err =  "Data gagal di tambahkan" ;
			redi("/?err=$err"); 
		}

		redi($link = "../");
	} else {
	?>
		<?= redi() ?>
	<?php 
	}
}
?>