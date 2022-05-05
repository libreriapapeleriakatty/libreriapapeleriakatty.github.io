<?php 
//Deber
//1 realizar un programa en php que tenga un arreglo de 8 numeros enteros y que haga lo siguiente recorrer y mostralo ordenar y mostrarlo utilizar las funciones for y foreach.
$numeros= array("juan" =>1, "diego" =>2, "jesus" =>3, "luis"=>4,"antony" =>5, "raul" =>6, "alejandro" =>7, "fernando"=>8, );
 
foreach($numeros as $nombres => $personas)
    {
    echo  $nombres . " es: "  . $personas;
    echo "<br>";
    }
echo"<hr>"; 
//2 Hacer un array de 10 elementos enteros e imprimir el mayor y el menor. 
//echo 'numero menor';

$num[0]='cero';
$num[1]='uno';
$num[2]='dos';
$num[3]='tres';
$num[4]='cuatro';
$num[5]='cinco';
$num[6]='seis';
$num[7]='siete';
$num[8]='ocho';
$num[9]='nueeve';
$num[10]='diez';
for ($i=0; $i <count($num) ; $i++) {

   if ($num[$i]=='ocho') {


echo'numero mayor';
}

}
echo "<hr>";

//3 Sumar dos arrays de 5 elementos enteros y obtener el resultado en un tercer array.
//Datos del array:

$n1 =array(1,40,3,20,10);
$n2 =array(1,2,3,20,10);

print_r(sumar($n1,$n2));

function sumar ($n1,$n2){
    $n3=array();

    for ($i=0; $i <=4 ; $i++) { 
        $n3[$i]= $n1[$i] + $n2[$i];
       
    }
     return $n3;


    }
    echo "<hr>";
    


//4 Definir un array de 5 elementos y asignar a cada uno de ellos un número, mediante
//una estructura condicional, determinar si el promedio de los números son mayores o
//menores que 6. Mostrar el mensaje informando el resultado.
//Utilizar una función llamada media para realizar el proceso.   

$array = array(1,2,3,4,5,6);
media($array);
function media ($array) {
     $mayor = $array[0];
     $menor = $array[0];
     foreach ($array as $key) {
      if ($mayor < $key){
         $mayor = $key;
      }
      if ($menor > $key){
         $menor = $key;
      }
        

     }
echo "El numero mayor es: ". $mayor. "<br>";
echo "El numero menor es: ". $menor."<br>";
}
echo "<hr>";

//5 Ingresar los datos nombre, edad y ciudad en un Array. Imprimir los datos y
//determinar si es mayor de edad (18 años)

$registros = array(
    array(
        'nombre' => 'juan',
        'apellido' => 'leon',
        'ciudad'=>'guayaquil',
        'edad'=>20
    ),
   
    array(
        'nombre' => 'Jacob',
        'apellido' => 'leon',
        'ciudad'=>'guayaquil',
        'edad'=>18
         
    ),
   
    array(
        'nombre' => 'armando',
        'apellido' => 'soliz',
        'ciudad'=>'portoviejo',
        'edad'=>19
    ),
    array(
        'nombre' => 'blanca',
        'apellido' => 'leon',
        'ciudad'=>'quito',
        'edad'=>15
    ),

    array(
        'nombre' => 'Luis',
        'apellido' => 'prieto',
        'ciudad'=>'guayaquil',
        'edad'=>19
    ),
    array(
        'nombre' => 'katty',
        'apellido' => 'bohorquez',
        'ciudad'=>'guayaquil',
        'edad'=>25
    )
    
    

);
 
$nombres = array_column($registros,'nombre');
echo 'es mayor de edad: '. $nombres[5];
//echo 'es menor de edad:'.$nombres[3];
echo "<hr>";



    






 ?>