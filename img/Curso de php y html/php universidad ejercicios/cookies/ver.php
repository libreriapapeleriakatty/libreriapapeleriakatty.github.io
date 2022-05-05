<?php 

if (isset($_COOKIE['micookie'])){
	echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
	echo "no existe la cokie";

}	
if (isset($_COOKIE['unaño'])) {
	echo"<h1>".$_COOKIE['unaño']."</h1>";

}else{
	echo "no existe la cookie";

}




 ?>