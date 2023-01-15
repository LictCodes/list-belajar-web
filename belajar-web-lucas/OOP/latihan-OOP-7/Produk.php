<?php  
// MATERI : inheritance 

abstract class Produk 
{
	protected 
		$nama ,
		$harga ,
		$deskripsi ;
	function __construct($nama,$harga , $deskripsi = "")
	{
		$this  -> nama = $nama ; 
		$this  -> harga = $harga ; 
		$this  -> deskripsi = $deskripsi ; 
		self::display();
	}
	function display(){
		$nama = $this -> nama ;
		$harga = $this -> harga ;
		$deskripsi = $this -> deskripsi ;
		return <<<CODE
Produk : $nama <br>
Harga : $harga <br> 
Deskripsi : $deskripsi <br>
CODE;
	}
	function getName()
	{
		return $this -> nama ; 
	}
	function getHarga() 
	{
		return $this -> harga ;
	}
}

class ProdukSembako extends Produk 
{
	private $exp , $edisi, $info = "Sembako"	;
	function __construct($nama , $harga , $deskripsi , $exp , $edisi = "normal")
	{
		parent::__construct($nama, $harga , $deskripsi );
		$this -> exp = $exp ; 
		$this -> edisi = $edisi ; 
	}
	function display(){
		return "$this->info : {$this->nama} | {$this->harga} | {$this->edisi} | {$this->exp} <br> <br>";
	}
}
class ProdukBuku extends Produk 
{	
	private $jmlHal, $warna , $info = "Buku";
	function __construct($nama ,  $harga , $deskripsi , $jmlHal , $warna )
	{
		parent::__construct($nama , $harga , $deskripsi);
		$this ->  jmlHal = $jmlHal ; 
		$this ->  warna  = $warna  ; 
	}
	function display(){
		return "$this->info : {$this -> nama} | {$this ->harga} | {$this->jmlHal} halaman | {$this->warna}";
	}
}

class PrettyDisplay 
{	private $data = [];
	function addData(Produk $prdk )
	{














		$this -> data[] = $prdk;
	}
	function display(){
		?>
		<style type="text/css">
			table, th, td {
  				border: 1px solid;
			}
			th , td {
				padding: 10px;
			} 
		</style>
		<table>
			<tr>
				<th>information</th>
				<th>___________</th>
			</tr>
				
		<?php
		foreach ($this -> data as $d)  { ?>
			<tr>
				<td><?= $d -> display() ?><td>
				<!-- <td></td> -->
			</tr>
		<?php }
		?>
		
		</table>
		<?php
	}
}


?>