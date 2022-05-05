<?php  
//Relalizar un ejercicio en array asociativo con string personalizado indicando los nombres apellidos y generos de una persona y que me presente por pantalla en mensaje el resultado del genero de la persona.  
$datos_persona= array('nombre'=> "Jacob", 'apellido'=> "Leon", 'genero'=> "masculino");
echo $datos_persona ['genero'];
echo"<hr>";

//realizar un ejercicio en array asociativo de un equipo de futbol de 11 jugadores indicandome la clave y el valor de dicho equipo de futbol y que me presente por pantalla en mensaje el nombre del delantero.


$equipo ['Arquero'] = 'kelvin';

$equipo ['Defensa central'] = 'ivan';

$equipo ['Defensa central'] = 'ariel';

$equipo ['Lateral derecho'] = 'omar';

$equipo ['Lateral izquierdo'] = 'jesus';

$equipo ['Volante central'] = 'pablo';

$equipo ['Volante central'] = 'isaias';

$equipo ['Volante extremo'] = 'juan';

$equipo ['Volante extremo'] = 'ezequiel';

$equipo ['Volante enganche'] = 'lucas';

$equipo ['Delantero'] = 'David';


echo $equipo ['Delantero'];

echo"<hr>"; 

//Realizar un programa que contenga 2 arreglos el primer arreglo se llamara persona y el segundo edad, tiene que contener la misma cantidad de valores, Presentar por pantalla el nombre de la persona y la edad, con el bucle for 
$persona=['Daniel','Ismael','Jose','Lucia','Maria'];
$edad=[19,12,45,18,19];

for ($i=0; $i < count($persona); $i++) { 
	echo $persona[$i]. " tiene ". $edad[$i]. " años <br>";
}

?>