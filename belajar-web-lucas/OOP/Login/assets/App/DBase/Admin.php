<?php  
class Admin extends Connect {
	public $Admin  = []; 
	private $Con; 
	function __construct($h, $u , $p , $d){
		parent::__construct($h , $u, $p , $d);
		$this -> Con = $this -> con ; 
		$query  = "SELECT * FROM admin";
		$get  = $this -> Con -> query($query);
		while($data = $get -> fetch_assoc()){
			$this -> Admin[] = $data;
		}
	}
	function jumlahAdmin(){
		return count($this -> Admin);
	}
	function usernameAdmin(){
		$user = [];
		foreach ($this -> Admin as $key) {
			$user[] = $key["users"];
		}
		return $user;
	}
	function passwordAdmin(){
		$pass = [];
		foreach ($this -> Admin as $key) {
			$pass[] = $key["pass"];
		}
		return $pass;	
	}
	function idAdmin(){
		$id = [];
		foreach ($this -> Admin as $key) {
			$id[] = $key["id"];
		}
		return $id;
	}
}


?>