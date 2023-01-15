<?php  
// interface adalah murni template 
interface Buah {
	// tidak boleh ada property dan hanya ada isi
	function makan();
	function rasa();
}

class Pisang implements Buah {
	function makan(){
		echo "Nyam nyam...";
	}
	function rasa(){
		echo "masam";
	}
}

?>