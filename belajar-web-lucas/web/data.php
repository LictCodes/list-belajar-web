<?php require "asset/func/index.php";?>
<table >
	<tr>
		<th>nama</th>
		<th>umur</th>
		<th>option</th>
	</tr>
<?php
	$get =  get_data($conn) ;
	while($d = $get-> fetch_assoc()){ ?>
		<tr>
			<td><?= $d["nama"] ?></td>
			<td><?= $d["umur"] ?></td>
			<td><button  onclick="editData(<?= $d["id"] ?>)">edit</button> | <button onclick="hapusData(<?= $d["id"] ?>)"> hapus</button></td>
		</tr>
<?php } ?>
</table>
