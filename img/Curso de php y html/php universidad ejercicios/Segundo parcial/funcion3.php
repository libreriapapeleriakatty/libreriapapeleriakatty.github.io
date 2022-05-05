<?php 
//funciones
//Mostrar dia mes y año.
//echo date('d-m-y');
//echo "<hr>";

//1 Funciones anonimas 
//Las funciones anónimas son funciones sin nombre.
$nombre="Josue zuberbuhler";
$imprimirnombre=function()use($nombre){
	echo $nombre;
};
$imprimirnombre();
echo "<hr>";

//2 var_dump proporciona la información sobre el tamaño y tipo de datos de la variable
$Nombre='Evelyn';
$Apellido='Villagomez';
$Edad=25;
$Direccion='Ayacucho';
$Numero=10;
var_dump($Nombre);
echo"<br>";
var_dump($Apellido);
echo"<br>";
var_dump($Edad);
echo"<br>";
var_dump($Direccion);
echo"<br>";
var_dump($Numero);
echo "<hr>";

//3 array_column — Devuelve los valores de una sola columna del array 
$registros = array(
    array(
        'nombre' => 'Luis',
        'apellido' => 'leon',
    ),
   
    array(
        'nombre' => 'lucas',
        'apellido' => 'sosa',
         
    ),
   
    array(
        'nombre' => 'armando',
        'apellido' => 'solis',
        
    ),
    array(
        'nombre' => 'Peter',
        'apellido' => 'suarez',
    )
);
 
$nombres = array_column($registros, 'nombre');
print_r($nombres);
echo "<hr>";

//4 Funcion date esta funcion realiza la fecha actual de nuestro servidor.
//l  Una representación textual completa del día de la semana 
//j  Día del mes sin ceros iniciales.
//F Una representación textual completa de un mes, como por ejemplo february "febrero"
//y Una representación de dos dígitos de un año "22"
echo "Dia,fecha,mes,año";
echo"<br>";
 echo date("l-j-F-y");

 echo"<br>";
 echo "<hr>";

 //5 sqrt Devuelve la raíz cuadrada de dicho numero
 echo"Raiz cuadrada <br>";
 $numero=49;
 echo sqrt($numero);
 echo "<hr>";




?>