<?php 
class Kucing 
{	
	const PEMILIK = "Lucas Renanda";
	var $name;
	var $warna;
	var $harga;


	function __construct( $name = "",  $warna  = "", $harga = null)
	{
		if(!$name)
		{
			$name = "Rewtty";
			$this -> name = $name; 
		} else {
			$this -> name = $name ;
		}
		$this-> warna = $warna;
		$this-> harga = $harga;
	}
	function __destruct(){
		print "<br> <br>" . $this -> name . " Bye Bye";
	}
	function info() 
	{
		print "PEMILIK : " . self::PEMILIK . "<br>";
	}
}

?>