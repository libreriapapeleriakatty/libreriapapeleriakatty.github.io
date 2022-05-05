<?php  
//Los arrays asociativos son arrays cuyos keys son strings personalizados.Para acceder a los valores de un array asociativo se hace de la misma forma que con arrays numéricos, mediante corchetes: []

//Se define un-Array asociativo  cuyos valores se asignan mediante variables  claves = y valores  de la siguiente manera:

$Marcas_televisor ['Led'] = 'Lg';

$Marcas_televisor ['Smart'] = 'Tcl';

$Marcas_televisor ['Plasma'] = 'Sony';

echo $Marcas_televisor['Smart'];

echo"<hr>";

//array asociativo 
//=> asignacion al operador 

$Marcas_Electrodomestico=array(

'Cocina' => "Mabe",

'Televisor' => "Lg",

'Nevera' => "Indurama",

'Lavadora' => "whirpool",

'Secadora' => "Siemens",

'Ventilador' => "Samuray",

'Computadoras' => "Xtratech"

 );

echo $Marcas_Electrodomestico ['Secadora'];

echo"<hr>";

//La función array_column() devuelve los valores de una sola columna de un array.
//"String"

$registros = array(

    array(
        
        'Nombre' => 'Javier',
        'apellido' => 'Colman',
    ),
    array(

        'Nombre' => 'Juan',
        'apellido' => 'Perlaza',
    ),
    array(
    
        'Nombre' => 'Lucas',
        'apellido' => 'briones',
    ),
    array(
       
        'Nombre' => 'Israel',
        'apellido' => 'Vera',
    )
);
 
$nombres = array_column($registros, 'Nombre');
print_r($nombres);

echo "<br>";
echo"<hr>";

//muestra los array de los valores asociativos de un array
$registros = array(
    array(
        'nombre' => 'juan',
        'apellido' => 'leon',
    ),
   
    array(
        'nombre' => 'Jacob',
        'apellido' => 'insurralde',
         
    ),
   
    array(
        'nombre' => 'armando',
        'apellido' => 'soliz',
        
    ),
    array(
        'nombre' => 'blanca',
        'apellido' => 'leon',
    ),

    array(
        'nombre' => 'Luis',
        'apellido' => 'prieto',
    ),
    array(
        'nombre' => 'katty',
        'apellido' => 'bohorquez',
    )
    
    

);
 
$nombres = array_column($registros,'nombre');
echo 'es mayor de edad:'. $nombres[0];
echo "<hr>";


//array asociatviso con condiciones con for y if
//print_r($semana[$i]);     "se muestre todos los dias de la semana "
//if ($semana[$i]=='jueves') {
//echo'curso de ingles';
//}
//}
$Semana [0]='lunes';
$Semana [1]='martes';
$Semana [2]='miercoles';
$Semana [3]='jueves';
$Semana [4]='viernes';
$Semana [5]='sabado';
$Semana [6]='domingo';

for ($i=0; $i <count($Semana) ; $i++) {

   if ($Semana[$i]=='jueves') {

echo'curso de ingles';
}

}
    


echo "<hr>";







//La función keys() simplemente devuelve el elemento del array 

//Con la función foreach() podemos recorrer los diferentes tipos de arrays asociativos y objetos de una manera mas controlada. Vamos a ver un ejemplo y sintaxis de esta estructura.
$Equipo = array("portero" =>'Victor valdes', "defensa" =>'Puyol', "medio" =>'Iniesta', "delantero"=>'Ronaldo');
 
foreach($Equipo as $Posicion => $Jugador)
    {
    echo "El " . $Posicion . " es: "  . $Jugador;
    echo "<br>";
    }
echo"<hr>";   


 ?>		