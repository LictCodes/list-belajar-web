<?php  
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

?>