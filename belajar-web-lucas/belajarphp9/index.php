<?php  
// die();
?>
<!DOCTYPE html>
<html>
<head>
	<title>data penduduk</title>
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="asset/css/style1.css">
</head>
<body>
	<h1 id="jdl"> Data penduduk </h1> 
	<div class="all-btn">	
		<button class="btn-1">
			<a href="#" id="show" >show data</a>
			<a href="#" id="hide" style="display: none;">hide data</a>
		</button>
		<button class="btn-2">
			<a href="#" id="tambah">tambah</a>
			<a href="#" id="sbm-add">submit</a>
		</button>
	</div>
	<div id="content"></div>
	<script type="text/javascript">
		$(document).ready(function () {
			// loadData()
			// while(true){
			$("#sbm-add").hide()
			$("#show").click(function (){ 
				getData() 
				$(this).hide()
				$("#content").show()
				$("#hide").show()
			})
			$("#hide").click(function (){
				$("#content").hide()
				$("#show").show()
				$(this).hide()

			})
			$("#tambah").click(function (){
				getForm()
				$("#sbm-add").show()
				$(this).hide()
				$("#show").hide()
				$("#hide").hide()
				$("#jdl").text("Update Data")
			})
			$("#sbm-add").click(function (){
				addData()
				$(this).hide()
				$("#hide").show()
				$("#tambah").show()
				$("#jdl").text(" Data penduduk ")
				setTimeout(getData,3000)
			})
		})
		// }

		
		function getData(){
			$.get("data.php",function (data) {
					$("#content").fadeIn("slow").html(data)
			})

		}
		function getForm(){
			$.get("form.php",function (data) {
					$("#content").html(data)
			})
		}
		function addData(){
			$.post("form.php",{ nama : $("#nama").val(), umur : $("#umur").val()}).done(function (data){
				$("#content").html(data)
			})
		}
		function editData(id){
			$.get("edit.php",{ID : id},function (data){
				$(".all-btn").hide()
				$("#jdl").text("Edit data")
				$("#content").html(data)
				$("#edt-data").click(function (){
					const nama = $("#nama").val()
					const umur = $("#umur").val()
				    const data = {
				    	nama : nama ,
				    	umur : umur ,
				    	id : id 
				    }
				    $.post("edit.php",data).done(function (){
				    	setTimeout(function (){
				    		getData()
							$(".all-btn").fadeIn("slow").show()
				    	}, 4000)

				    })
				})
			})
		}
		function hapusData(id) {
			$.get(`delete.php?ID=${id}`,function () {
				getData()
			})
		}
 	</script>
</body>
</html>