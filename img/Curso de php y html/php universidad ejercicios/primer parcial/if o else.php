<?php 
#Realizar un ejercicio en el que indique si es menor de edad (VIVE CON LOS PADRES) si es mayor de edad indique en que ciudad vive y en caso de que tenga 60 años me indique si esta jubilado o no,#Dada una edad, saber si una persona es recién nacido, niño,  adolescente, adulto y adulto mayor.
#Recién nacido <2, niño 3 -12, adolescente entre 13 – 17, adulto de 18  a 59 y adulto mayor de 60a n edad…
#Sentencias con if y else 
//RECIEN NACIDO
$nombre="RauL Alcivar";
$ciudad="Daule";
$edad=61;
$vive="Vive Con los padres";
$jubilacion="jubilado";
echo "Programa que verifique la edad </br>";
echo "Su edad es:$edad</br>";
if ($edad>=1 and $edad<=2) {
	echo"Hola $nombre usted es recien nacido </br>";
	echo"vive con sus padres";
}elseif ($edad>=3 and $edad<=12) {
	echo"Hola $nombre Usted es un niño </br>";
	echo "vive con sus padres";	
}elseif ($edad>=13 and $edad<=17){
	echo"Hola $nombre Usted es un adolecente </br>";
	echo"vive con sus padres";

}elseif($edad>=18 and $edad <=59){
	echo"Hola $nombre Usted es un adulto </br>";
	echo "vive con sus padres";
}elseif($edad>=60 and $jubilacion=="Es jubilado"){
	echo"Hola $nombre Usted es un adulto mayor </br>";
	echo"vive en:$ciudad </br>";
	echo"Esta en $jubilacion </br>";
}else{	
	echo"Hola $nombre usted es un adulto mayor </br>";
	echo"vive en $ciudad </br>";
	echo" es $jubilacion </br>";
}


echo "<hr/>";//lineas largas

////VERIFICAR SI UNA PERSONA ES MAYOR DE EDAD CON EL INGRESO DEL NOMBRE Y si vive en la ciudad de guayaquil vive en el continente europeo y si no vive en el continente europeo no es en el continente europeo
$nombre="David herrera";
$ciudad="Guayaquil";
$continente="Europeo";
$edad=20;
$mayoria_edad=18;

if ($edad>=$mayoria_edad) 
{	
	echo "$nombre es mayor de edad  <br> </br>";
	echo "vive en $ciudad  <br> </br>";

} else {
	echo "$nombre no es mayor de edad  <br> </br>";
	echo "no vive en $ciudad <br> </br>";

}
echo "<hr/>";//lineas largas

if ($continente=="AMERICA DEL SUR") {
	echo "si es: $continente <br></br>";
	
} else {
	echo"No es: $continente <br></br>";

}

echo "<hr/>";//lineas largas

//setencia if else
//ejemplo 5
$dia=3;
if ($dia==1) {
	echo "LUNES <br></br>";
} elseif ($dia ==2) {

	echo "MARTES. <br></br>";
}elseif ($dia==3){
	echo "MIERCOLES <br></br>";
}elseif ($dia==4) {
	echo "JUEVES <br></br>";
}elseif ($dia==5) {
	echo "VIERNES <br></br>";
}else{
	echo "ES FIN DE SEMANA <br></br>";

}
 echo "<hr/>";//lineas largas
//Ejercicio 6
$edad1=18;
$edad2=64;
$edad_persona=15;

if ($edad_persona>= $edad1 && $edad_persona <=$edad2) { //estoy preguntando si la edad  persona es mayor a edad 1 y estoy preguntando si edad persona es mayor a edad 2
	echo"Esta en edad de trabajar <br> </br>";

}else {
	echo "No esta en edad de trabajar <br> </br>";
}
echo "<hr/>";

//Ejercicio 7 
$pais="Japon";//si pongo otro pais en esto caso no se cumple
if ($pais=="Colombia"||$pais=="peru" || $pais=="Ecuador") {
	echo "En este pais se habla español";
}else{
	echo "En este pais no se habla español";
}
echo "<hr/>";

//Ejercicio 7 
$pais="Colombia";//si pongo los pais en esto que se cumplan
if ($pais=="Colombia"||$pais=="peru" || $pais=="Ecuador") {
	echo "En este pais se habla español";
}else{
	echo "En este pais no se habla español";
}
echo "<hr/>";





 ?>


