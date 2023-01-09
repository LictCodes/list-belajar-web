<?php 
require "asset/func/index.php";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
	if (isset($_GET["ID"]) and $_GET["ID"] != "") {
		$id = $_GET["ID"];
		$query = "SELECT * FROM warga WHERE id = $id";
		$data = $conn -> query($query);
		while ($d = $data -> fetch_object()) { ?>
		<ul>
			Nama 
			<li>
				<input type="text" name="nama" id="nama" autofocus value="<?= $d -> nama ?>">
			</li>
			Umur 
			<li>
				<input type="text" name="umur" id="umur" value="<?= $d -> umur ?>">
			</li>
		</ul>
		<button id="edt-data">submit</button>
		<?php 
		}
	} 

	} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
		// echo "heelo word";
		if (isset($_POST["nama"]) and isset($_POST["umur"])) {
			$data = [
				$_POST["nama"],
				$_POST["umur"],
				$_POST["id"]
			];

		$query = "UPDATE warga SET nama='$data[0]' , umur='$data[1]' WHERE id=$data[2]";
		$conn -> query($query); 
		// echo "hello cui ";
		if ($conn -> affected_rows > 0) {
			echo "Sukses terkirim";

		} else {
			echo "Data gagal di kirim";
		}
			

		} else {
			?>
			<h1>Data tidak lengkap</h1>
			<?php 
		}
}


?>