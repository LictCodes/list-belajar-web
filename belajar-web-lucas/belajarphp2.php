<?php 
// belajar global 
// belajar scope 

$x= 20; 
function belajar_scope()
{
	global $x ;
	$x = 10 ;
}
echo "$x";
belajar_scope();
echo "$x";
//saat kita menggunakan global di dalam function maka kita bisa mempunyai akses penuh didalamnya 

?>