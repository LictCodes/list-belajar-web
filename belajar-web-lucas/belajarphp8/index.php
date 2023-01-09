<?php  
require_once "./connect_to_db.php";
global $warga;
?>
<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR INSERT KE-DB </title>
	<style type="text/css">
		body{ background-color: black; }
		.loader {
		  width: 48px;
		  height: 48px;
		  margin: auto;
		  position: fixed;
		  top: 50%;
		  right: 50%;
		}

		.loader:before {
		  content: '';
		  width: 48px;
		  height: 5px;
		  background: #f0808050;
		  position: absolute;
		  top: 60px;
		  left: 0;
		  border-radius: 50%;
		  animation: shadow324 0.5s linear infinite;
		}

		.loader:after {
		  content: '';
		  width: 100%;
		  height: 100%;
		  background: #f08080;
		  position: absolute;
		  top: 0;
		  left: 0;
		  border-radius: 4px;
		  animation: jump7456 0.5s linear infinite;
		}

		@keyframes jump7456 {
		  15% {
		    border-bottom-right-radius: 3px;
		  }

		  25% {
		    transform: translateY(9px) rotate(22.5deg);
		  }

		  50% {
		    transform: translateY(18px) scale(1, .9) rotate(45deg);
		    border-bottom-right-radius: 40px;
		  }

		  75% {
		    transform: translateY(9px) rotate(67.5deg);
		  }

		  100% {
		    transform: translateY(0) rotate(90deg);
		  }
		}

		@keyframes shadow324 {

		  0%,
		    100% {
		    transform: scale(1, 1);
		  }

		  50% {
		    transform: scale(1.2, 1);
		  }
		}
	#box{
		display: none;
		justify-content: space-evenly;

	}
	
	.card {
		width: 190px;
		height: 254px;
		background: #07182E;
		position: relative;
		display: flex;
		place-content: center;
		place-items: center;
		overflow: hidden;
		border-radius: 20px;
		margin-right: 80px;
	}

	.card h2 {
		z-index: 1;
		color: white;
		font-size: 16px;
		font-family: monospace;
		text-align: center;
	}
	.card a {
	 	text-decoration: none;
	 	font-weight: bold;
	 	/*height: 350px;
	 	width: 250px;*/
	 	background-color: white;
	 	border-radius: 4px ;
	 	color: black ; 
	}

	.card::before {
		content: '';
		position: absolute;
		width: 100px;
		background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
		height: 130%;
		animation: rotBGimg 3s linear infinite;
		transition: all 0.2s linear;
	}

	@keyframes rotBGimg {
		from {
		transform: rotate(0deg);
		}

		to {
		transform: rotate(360deg);
		}
	}

	.card::after {
		content: '';
		position: absolute;
		background: #07182E;
		
		inset: 5px;
		border-radius: 15px;
	}  
	/* .card:hover:before {
	background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
	animation: rotBGimg 3.5s linear infinite;
	} */

	#jdl{
		font-size: 30px;
		color: white;
		position: relative;
		top: 50%;
		bottom:50%; 
	}

	</style>
</head>
<body>
<div class="loader" id="loader"></div>
<h1 id="jdl"> DATA : </h1>
	<div class="cotainer">
	<!-- loading  --> 
			<!-- card -->
			<div class="box" id="box">
				<?php foreach ($warga as $dat) { ?>
					<div class="card">
				    	<h2><?= $dat["nama"]?> <br> <br> 
				    		<a href="./hapus-data?id=<?= $dat['id'] ?>">Hapus
				    		</a>
				    		<a href="./update-data?id=<?= $dat['id']?>">Update</a>
				    	</h2>

					</div>
				<?php } ?>
			</div>
			<button style="
				background-color: white;
				height: 830%;
				border-radius: 8px;
				margin-top: 60px;

			">
				<a href="./tambah-data" style="
					text-decoration: none;
					color: black;
					font-weight: bold;
				">
					Tambah data 
				</a>
			</button>

	</div>
	<script type="text/javascript">
		const loader = document.getElementById('loader')
		const cont = document.getElementById('box')
		window.setTimeout( () => {
			loader.classList.remove("loader")
			cont.style.display = "flex"
			// cont.style.padding = "50px"
			cont.style.borderRadius = "5px"

		},
			500	

		)
	</script>






	
</body>
</html>