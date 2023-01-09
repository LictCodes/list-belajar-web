<?php  
function redi($link = "./" ){
?>
	<script type="text/javascript">
		window.location.href = "./<?= $link ?>"
	</script>
<?php
}
// redi();
function update($dbConnect, $id , ...$data){
	 mysqli_query($dbConnect, "
	 		UPDATE warga SET 
	 		nama='$data[0]',
	 		umur='$data[1]'
	 		WHERE id=$id
	 ") ; 
}
$link = $_SERVER["PHP_SELF"];
$id = isset($_GET["id"]) ? $_GET["id"]:NULL;
if(explode("/",$link)[4] === "update-data.php"){
	die("Hayoo mau ngapain");
}
// if (!isset($id)) {
// 	redi("../");
// }
$err = "";
$conn = mysqli_connect("localhost","root","","warga_cilacap");
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	$datas = [ 
		// isset($_GET["id"]) ? htmlspecialchars($_GET["id"]):false ,
		isset($_POST["nama"]) ? htmlspecialchars($_POST["nama"]):false,
		isset($_POST["umur"]) ? htmlspecialchars($_POST["umur"]):false
	]; 

	if($datas[0] && $datas[1])
	{
		update($conn,$_POST['id'], ...$datas);
		// die();
		if(mysqli_affected_rows($conn) > 0){ ?> 
			<script type="text/javascript"> alert("data sukses terkirim")</script>
		<?php
		} else {
			$err =  "Data gagal di ubah" ;
			redi("/?err=$err"); 
		}

		redi($link = "../");
	} else {
	
		redi() ;
	}
}
?>