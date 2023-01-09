<?php require 'asset/func/index.php'; ?>
<?php if ($_SERVER["REQUEST_METHOD"] === "GET"){?>
<ul>
	Nama 
	<li>
		<input type="text" name="nama" id="nama" autofocus>
	</li>
	Umur 
	<li>
		<input type="text" name="umur" id="umur">
	</li>
</ul>
<?php } elseif($_SERVER["REQUEST_METHOD"] === "POST") {
	if (isset($_POST["nama"]) and isset($_POST["umur"]))
	{	
		$data = [
			$_POST["nama"],
			$_POST["umur"]
		];
		$add = addData($conn, ...$data);
		if ($conn -> affected_rows > 0) {
			echo "Sukses terkirim";
		} else {
			echo "Gagal terkirim";
		}
	} else {
		?> 
		<p>Data tidak lengkap </p>
		<?php
	}

} ?>