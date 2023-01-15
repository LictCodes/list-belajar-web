<?php  
// MATERI : getter and setter 


class Produk 
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
	function setName($nama){
		if(!is_string($nama)){
			throw new exception("nama wajib string");
		}
		$this -> nama  = $nama;
	}
	function getName()
	{
		return $this -> nama ; 
	} // getter
	function getHarga() 
	{
		return $this -> harga ;
	} //getter 
}

class ProdukSembako extends Produk 
{
	private $exp , $edisi	;
	function __construct($nama , $harga , $deskripsi , $exp , $edisi = "normal")
	{
		parent::__construct($nama, $harga , $deskripsi );
		$this -> exp = $exp ; 
		$this -> edisi = $edisi ; 
	}
	function display(){
		return "Sembako : {$this->nama} | {$this->harga} | {$this->edisi} | {$this->exp} <br> <br>";
	}
}
class ProdukBuku extends Produk 
{	
	private $jmlHal, $warna;
	function __construct($nama ,  $harga , $deskripsi , $jmlHal , $warna )
	{
		parent::__construct($nama , $harga , $deskripsi);
		$this ->  jmlHal = $jmlHal ; 
		$this ->  warna  = $warna  ; 
	}
	function display(){
		return "Buku : {$this -> nama} | {$this ->harga} | {$this->jmlHal} halaman | {$this->warna}";
	}
}



?>