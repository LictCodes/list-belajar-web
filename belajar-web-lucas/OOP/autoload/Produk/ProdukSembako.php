<?php  
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
?>