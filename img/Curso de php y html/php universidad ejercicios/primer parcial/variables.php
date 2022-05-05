<?php 
echo "Presentacion de variables enteras en php </br> ";
$numero =5;#Para declarar una variable tipo entera.
$n=2; #Para declarar una variable tipo entera.
$foo=25;
echo "$numero</br> $n</br>$foo</br><br>";#Presento las tres variables por "numero","n","Foo" Con saltos de dos lineas 



echo "Presentacion de variables tipo float en php </br>";
$n2=5.6; #Defino variable de tipo flotante.
echo "$n2</br></br>";

echo "Presentacion de Tipo cadena de caracteres en php. </br>";
$cadena="Esto es una cadena de texto $numero";#Tipo de cadena de texto.
$cadena2='Esto es una cadena de texto $n2</br>'.$n; #Otra manera de Tipo de cadena de texto con comillas simples''.
echo"$cadena</br> $cadena2</br>";

echo "Presentacion de variables tipo boleanas en php</br>";
$bool1=false;
$bool2=true;

echo "Presentacion de variables tipo Arreglos en php</br>";

$array= array('Nombre'=>"Josue",'edad'=> "27
    ",'Direccion'=> "20 Y vacasgalindo");
//Los Arreglos empieza desde el 0 en estos casos hay dos arreglos.
// Y en estos casos Hay tres pocisiones nombre, ,edad,direccion,
$array ['Nombre'] ;
print_r($array);
//Sintaxis de variables constante.
define("pi", 3.1416);//Es una variable constante.
echo pi;//ya Presentaria la variable contante sin ""
 ?>