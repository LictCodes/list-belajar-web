<?php require "asset/func/index.php";?>
<table >
	<tr>
		<th>nama</th>
		<th>umur</th>
	</tr>
<?php
	$get =  get_data($conn) ;
	while($d = $get-> fetch_assoc()){ ?>
		<tr>
			<td><?= $d["nama"] ?></td>
			<td><?= $d["umur"] ?></td>
		</tr>
<?php } ?>
</table>
