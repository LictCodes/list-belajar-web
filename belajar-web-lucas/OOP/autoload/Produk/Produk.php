<?php  
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
?>