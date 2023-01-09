 <?php
$rank = isset($_GET["rank"]) ? $_GET["rank"] : false;  
$name = isset($_GET["nama"]) ? $_GET["nama"] : false;  ?>
<!DOCTYPE html>
<html>
<head>
	<title>menampilkan nama pada halaman</title>
	<style type="text/css">
		.box{
			border: 2px solid black;
			padding: 20px;
		}
		.left{
			text-align: none;
		}
	</style>
</head>
<body>
<?php //				 LUCAS ? 
if(($rank) && ($name))  {
?>		<div class="box">
	
       <h1>RANK : </h1>
       <ul class="left">
       		<li><?= htmlspecialchars($name) ?></li>
       		<li><?= htmlspecialchars($rank) ?></li>
       </ul>
		</div>
<?php
   } else {
?> 
		<h5>DATA TIDAK VALID</h5>
		<p>Redirect to 5 seconds...</p>
		<script type="text/javascript">
    		window.setTimeout(function() {
        		window.location.href='./belajarphp4.php';
    		}, 5000);
		</script>
<?php 
	}	
?>
</body>
</html>