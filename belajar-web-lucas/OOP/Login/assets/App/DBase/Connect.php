<?php  
abstract class Connect {
	private 
		$host,
		$username ,
		$pass,
		$dbase;
	protected 
		$con;
		protected function __construct($h , $u, $p , $d ){
			$this -> host = $h;
			$this -> username = $u;
			$this -> pass = $p;
			$this -> dbase = $d;
			$this -> con =  new mysqli($this -> host , $this -> username , $this -> pass, $this -> dbase);
		}
		function getDataAdmin() {
			$query  = "SELECT * FROM admin";
			$get = $this -> con -> query($query);
			$dataAdmin = [];
			while($data = $get -> fetch_assoc() ){
				$dataAdmin[] = $data; 
			}
			return $dataAdmin;
		}		
	
}

?>