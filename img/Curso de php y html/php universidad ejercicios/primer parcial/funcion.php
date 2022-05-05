<?php 
//funtion nombre (parametro1, parametro2,parametro n .......){
  //instruccion1
  //instruccion2
//}

//Mostrar por mensaje tipo de persona sin parametros
function nombrestercero(){
	echo "Juan Zambrano <br/>";
	echo "David Herrera <br/>";
	echo "Steven Moran <br/>";
	echo "Osmara Molina <br/>";
	echo "Ariel Macias <br/>";

	echo"<hr/>";

	//Invocar funcion
}
//Para usar las funciones varias veces invocaria algunas veces
nombrestercero();	
nombrestercero();
nombrestercero();
nombrestercero();

//Ejercicio en funciones con parametros
//Realizar una tabla multiplicar de un numero 77 
function tabla($numero){
	echo"</hr3 tabla de multiplicar del numero:$numero </h3>";
	for ($i=1; $i<=10; $i++) { 
		$operacion=$numero*$i;
		echo"$numero x $i = $operacion </br>";
	}



}	
//fucinon get para que reciba el url 
/*if (isset($_GET['numero'])) {
	tabla($_GET['numero']);
	tabla(2);
	tabla(3);
	tabla(4);


 }else{
 	echo"No hay numero para sacar la tabla <b/r>";
 }*/ 
 for ($i=1; $i<=10 ; $i++) { 

tabla($i);
}



	

 ?>